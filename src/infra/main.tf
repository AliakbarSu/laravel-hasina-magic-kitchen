provider "aws" {
  profile   = "allie"
  region    = "ap-southeast-2"
}

terraform {
  backend "s3" {
    bucket = "hasina-magickitchen-terraform-state"
    region = "us-east-1"
  }
}
