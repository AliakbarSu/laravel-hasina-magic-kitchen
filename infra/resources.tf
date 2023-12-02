resource "aws_launch_template" "web_server" {
  name = "web_server"

#   block_device_mappings {
#     device_name = "/dev/sdf"

#     ebs {
#       volume_size = 20
#     }
#   }

  image_id = var.ami_image_id
  instance_initiated_shutdown_behavior = "terminate"
  instance_type = var.instance_type

  iam_instance_profile {
    name = aws_iam_instance_profile.magic_kitchen_profile.name
  }

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
    availability_zone = var.availability_zones[0]
  }

  tag_specifications {
    resource_type = "instance"
    tags = {
      Name = "HasinaMagicKitchenWebServer"
    }
  }

  user_data = filebase64("${path.module}/scripts/install-docker.sh")
}
