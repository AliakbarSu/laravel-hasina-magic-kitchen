resource "aws_iam_role" "magic_kitchen" {
  name = "magic_kitchen_role"

  assume_role_policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": "sts:AssumeRole",
      "Principal": {
        "Service": "ec2.amazonaws.com"
      },
      "Effect": "Allow",
      "Sid": ""
    }
  ]
}
EOF

  tags = {
      tag-key = "tag-value"
  }
}

resource "aws_iam_role_policy" "magic_kitchen" {
  name = "magic_kitchen_policy"
  role = "${aws_iam_role.magic_kitchen.id}"

  policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": [
        "ssm:GetParameters"
      ],
      "Effect": "Allow",
      "Resource": "*"
    }
  ]
}
EOF
}

resource "aws_iam_instance_profile" "magic_kitchen_profile" {
  name = "magic_kitchen_profile"
  role = "${aws_iam_role.magic_kitchen.name}"
}
