# data "aws_security_group" "default" {
#   filter {
#     name   = "group-name"
#     values = ["*default*"]
#   }

#   filter {
#     name   = "vpc-id"
#     values = ["vpc-09d21e9169a0ef740"]
#   }
# }

resource "aws_security_group" "web_server" {
  name        = "allow_http"
  description = "Allow http inbound traffic"
  vpc_id      = "	vpc-09d21e9169a0ef740"

    lifecycle {
    create_before_destroy = true
  }

  tags = {
    Name = "allow_http_traffic"
  }
}

resource "aws_security_group_rule" "allow_http" {
    type              = "ingress"
    description      = "HTTP from VPC"
    from_port        = 80
    to_port          = 80
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_ssh" {
    type              = "ingress"
    description      = "SSH from VPC"
    from_port        = 22
    to_port          = 22
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_https" {
    type              = "ingress"
    description      = "HTTPS from VPC"
    from_port        = 443
    to_port          = 443
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_http_egress" {
    type              = "egress"
    description      = "HTTP from VPC"
    from_port        = 80
    to_port          = 80
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_ssh_egress" {
    type              = "egress"
    description      = "SSH from VPC"
    from_port        = 22
    to_port          = 22
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}

resource "aws_security_group_rule" "allow_https_egress" {
    type              = "egress"
    description      = "HTTPS from VPC"
    from_port        = 443
    to_port          = 443
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
    security_group_id = aws_security_group.web_server.id
}


# resource "aws_placement_group" "web_server" {
#   name     = "web_server"
#   strategy = "spread"
# }

# resource "aws_lb_target_group" "lb-tg" {
#   name     = "hasinaMagicKitchen-lb-tg"
#   port     = 80
#   protocol = "HTTP"
#   vpc_id   = "vpc-09d21e9169a0ef740"
# }

# resource "aws_eip" "lb" {
#   domain   = "vpc"
# }

# resource "aws_lb" "hasinaMagicKitchen-lb" {
#   name               = "hasinaMagicKitchen"
#   load_balancer_type = "application"
#   security_groups = [aws_security_group.web_server.id, data.aws_security_group.default.id]

#   subnet_mapping {
#     subnet_id     = "subnet-0b64e23bfd969c21c"
#     # allocation_id = aws_eip.lb.id
#   }

#   subnet_mapping {
#     subnet_id     = "subnet-0f23a4f21ca53a4b8"
#     # allocation_id = aws_eip.lb.id
#   }
# }

# resource "aws_lb_listener" "web_server" {
#   load_balancer_arn = aws_lb.hasinaMagicKitchen-lb.arn
#   port              = "80"
#   protocol          = "HTTP"
#   # ssl_policy        = "ELBSecurityPolicy-2016-08"
#   # certificate_arn   = "arn:aws:iam::187416307283:server-certificate/test_cert_rab3wuqwgja25ct3n4jdj2tzu4"

#   default_action {
#     type             = "forward"
#     target_group_arn = aws_lb_target_group.lb-tg.arn
#   }
# }

# resource "aws_autoscaling_group" "hasina_magic_kitchen" {
#   availability_zones = ["ap-southeast-2b"]
#   name                      = "hasina_magic_kitchen"
#   desired_capacity          = 1
#   max_size                  = 1
#   min_size                  = 1
#   health_check_grace_period = 300
#   health_check_type         = "EC2"
#   force_delete              = true
# #   placement_group           = aws_placement_group.web_server.id
#   launch_template {
#     id      = aws_launch_template.web_server.id
#     version = "$Latest"
#   }

#   timeouts {
#     delete = "15m"
#   }
# }

# resource "aws_autoscaling_attachment" "hasina-magic-kitchen" {
#   autoscaling_group_name = aws_autoscaling_group.hasina_magic_kitchen.id
#   lb_target_group_arn    = aws_lb_target_group.lb-tg.arn
# }



resource "aws_instance" "web" {
  count         = 1
  instance_type = "t2.micro"
  launch_template {
    id      = aws_launch_template.web_server.id
    version = "$Latest"
  }

  iam_instance_profile = "${aws_iam_instance_profile.magic_kitchen_profile.name}"

  tags = {
    Name = "WebServer-running-laravel"
  }
}
