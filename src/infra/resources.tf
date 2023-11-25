resource "aws_launch_template" "web_server" {
  name = "web_server"

#   block_device_mappings {
#     device_name = "/dev/sdf"

#     ebs {
#       volume_size = 20
#     }
#   }

  image_id = "ami-07b5c2e394fccab6e"
  instance_initiated_shutdown_behavior = "terminate"
  instance_type = "t2.micro"

  metadata_options {
    http_endpoint               = "enabled"
    http_tokens                 = "required"
    http_put_response_hop_limit = 1
    instance_metadata_tags      = "enabled"
  }

#   monitoring {
#     enabled = true
#   }

  network_interfaces {
    associate_public_ip_address = true
    security_groups            = [aws_security_group.web_server.id]
  }

  placement {
    availability_zone = "ap-southeast-2"
  }

  tag_specifications {
    resource_type = "instance"
    tags = {
      Name = "HasinaMagicKitchenWebServer"
    }
  }

  user_data = filebase64("${path.module}/scripts/install-docker.sh")
}
