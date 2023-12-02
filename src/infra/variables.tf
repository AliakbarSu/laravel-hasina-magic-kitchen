variable "namespace" {
  type        = string
  default     = "hasina-magic-kitchen"
  description = "Default namespace to create resources in"
}

variable "vpc_id" {
  type        = string
  default     = ""
  description = "Default vpc id for specific region to create resources in"
}

variable "region" {
  type        = string
  default     = "ap-southeast-2"
  description = "Default region to create resources in"
}

variable "public_subnets" {
    type        = list(string)
    default     = []
    description = "Default public subnets to create resources in"
}

variable "availability_zones" {
    type        = list(string)
    default     = []
    description = "Default availability zones to create resources in"
}

variable "ami_image_id" {
    type        = string
    default     = ""
    description = "Default ami image id to create resources in"
}

variable "instance_type" {
    type        = string
    default     = "t2.micro"
    description = "Default instance type to create resources in"
}

variable "rds_username" {
    type        = string
    default     = ""
    description = "Default db username to create resources in"
}

variable "rds_password" {
    type        = string
    default     = ""
    description = "Default db password to create resources in"
}

variable "domain_name" {
    type        = string
    default     = "hasina.store"
    description = "Default domain name to create resources in"
}

variable "ssl_certificate_arn" {
    type        = string
    default     = ""
    description = "The arn of your ssl certificate on AWS"
}