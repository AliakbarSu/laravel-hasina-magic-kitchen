resource "aws_ssm_parameter" "RDS_USERNAME" {
  name  = "/hasina-magic-kitchen/RDS_USERNAME"
  type  = "String"
  overwrite = true
  value = var.rds_username
}

resource "aws_ssm_parameter" "RDS_PASSWORD" {
  name  = "/hasina-magic-kitchen/RDS_PASSWORD"
  type  = "String"
  overwrite = true
  value = var.rds_password
}

resource "aws_ssm_parameter" "RDS_HOSTNAME" {
  name  = "/hasina-magic-kitchen/RDS_HOSTNAME"
  type  = "String"
  overwrite = true
  value = aws_db_instance.web_server_database.address
}

