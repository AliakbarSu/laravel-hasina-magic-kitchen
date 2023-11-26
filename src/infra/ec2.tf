 data "aws_security_group" "default" {
   filter {
     name   = "group-name"
     values = ["*default*"]
   }

   filter {
     name   = "vpc-id"
     values = [var.vpc_id]
   }
 }

resource "aws_security_group" "web_server" {
  name        = "${var.namespace}-web-server"
  description = "Security group for hasina magic kitchen web server"
  vpc_id      = var.vpc_id
  lifecycle {
    create_before_destroy = true
  }
  tags = {
    Name = "hasina-magic-kitchen-web-server"
  }
}

resource "aws_security_group_rule" "allow_http" {
    type              = "ingress"
    description      = "Allow HTTP from anywhere"
    from_port        = 80
    to_port          = 80
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_ssh" {
    type              = "ingress"
    description      = "Allow SSH from anywhere"
    from_port        = 22
    to_port          = 22
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_tcp" {
    type              = "ingress"
    description      = "Allow TCP from default VPC"
    from_port        = 3306
    to_port          = 3306
    protocol         = "tcp"
    source_security_group_id = data.aws_security_group.default.id
#    cidr_blocks      = data.aws_security_group.default
#    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_https" {
    type              = "ingress"
    description      = "Allow HTTPS from anywhere"
    from_port        = 443
    to_port          = 443
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_http_egress" {
    type              = "egress"
    description      = "Alow HTTP from anywhere"
    from_port        = 80
    to_port          = 80
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_ssh_egress" {
    type              = "egress"
    description      = "Allow ssh from anywhere"
    from_port        = 22
    to_port          = 22
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_tcp_egress" {
    type              = "egress"
    description      = "Allow TCP from default VPC"
    from_port        = 3306
    to_port          = 3306
    protocol         = "tcp"
    source_security_group_id = data.aws_security_group.default.id
#    cidr_blocks      = data.aws_security_group.default
#    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_https_egress" {
    type              = "egress"
    description      = "Allow HTTPS from anywhere"
    from_port        = 443
    to_port          = 443
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}


resource "aws_placement_group" "web_server" {
  name     = "${var.namespace}-web-server-placement-group"
  strategy = "spread"
}

resource "aws_lb_target_group" "lb-tg" {
  name     = "hasinaMagicKitchen-lb-tg"
  port     = 80
  protocol = "HTTP"
  vpc_id   = "vpc-09d21e9169a0ef740"
}

# resource "aws_eip" "lb" {
#   domain   = "vpc"
# }

resource "aws_lb" "hasinaMagicKitchen-lb" {
  name               = "${var.namespace}-lb"
  load_balancer_type = "application"
  security_groups = [aws_security_group.web_server.id, data.aws_security_group.default.id]

  subnet_mapping {
    subnet_id     = var.public_subnets[0]
    # allocation_id = aws_eip.lb.id
  }

  subnet_mapping {
    subnet_id     = var.public_subnets[1]
    # allocation_id = aws_eip.lb.id
  }
}

resource "aws_lb_listener" "web_server" {
  load_balancer_arn = aws_lb.hasinaMagicKitchen-lb.arn
  port              = "80"
  protocol          = "HTTP"
  # ssl_policy        = "ELBSecurityPolicy-2016-08"
  # certificate_arn   = "arn:aws:iam::187416307283:server-certificate/test_cert_rab3wuqwgja25ct3n4jdj2tzu4"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.lb-tg.arn
  }
}

resource "aws_autoscaling_group" "hasina_magic_kitchen" {
  name                      = "${var.namespace}-web-server-autoscaling-group"
  availability_zones        = [var.availability_zones[1]]
  desired_capacity          = 1
  max_size                  = 1
  min_size                  = 1
  health_check_grace_period = 300
  health_check_type         = "EC2"
  force_delete              = true
  # iam_instance_profile_arn  = aws_iam_instance_profile.magic_kitchen_profile.arn
  # iam_instance_profile = aws_iam_instance_profile.magic_kitchen_profile.name
#   placement_group           = aws_placement_group.web_server.id
  launch_template {
    id      = aws_launch_template.web_server.id
    version = "$Latest"
  }

  timeouts {
    delete = "15m"
  }
}

resource "aws_autoscaling_attachment" "hasina-magic-kitchen" {
  autoscaling_group_name = aws_autoscaling_group.hasina_magic_kitchen.id
  lb_target_group_arn    = aws_lb_target_group.lb-tg.arn
}


# resource "aws_instance" "web" {
#   count         = 1
#   instance_type = "t2.micro"
#   launch_template {
#     id      = aws_launch_template.web_server.id
#     version = "$Latest"
#   }

#   iam_instance_profile = aws_iam_instance_profile.magic_kitchen_profile.name

#   tags = {
#     Name = "WebServer-running-laravel"
#   }
# }
