resource "aws_security_group" "rds" {
  name        = "${var.namespace}-rds"
  description = "Security group for hasina magic kitchen rds"
  vpc_id      = var.vpc_id
  lifecycle {
    create_before_destroy = true
  }
  tags = {
    Name = "hasina-magic-kitchen-rds"
  }
}

resource "aws_security_group_rule" "allow_tcp_rds" {
    type              = "ingress"
    description      = "Allow TCP from default VPC"
    from_port        = 3306
    to_port          = 3306
    protocol         = "tcp"
    source_security_group_id = aws_security_group.web_server.id
    security_group_id = aws_security_group.rds.id
}

resource "aws_db_instance" "web_server_database" {
  allocated_storage    = 20
  multi_az             = false
  storage_type         = "gp2"
  deletion_protection  = true
  db_name              = "hasinaMagicKitchen"
  engine               = "mysql"
  engine_version       = "8.0.33"
  instance_class       = "db.t3.micro"
  username             = var.rds_username
  password             = var.rds_password
  lifecycle {
    prevent_destroy = true
  }
  vpc_security_group_ids      = [aws_security_group.rds.id]
#   parameter_group_name = "default.mysql5.7"
  skip_final_snapshot  = true
}