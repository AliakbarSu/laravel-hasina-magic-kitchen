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

resource "aws_iam_role_policy" "magic_kitchen_ssm" {
  name = "magic_kitchen_ssm_policy"
  role = aws_iam_role.magic_kitchen.id

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

resource "aws_iam_role_policy" "magic_kitchen_rds" {
    name = "magic_kitchen_rds_policy"
    role = aws_iam_role.magic_kitchen.id

    policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": [
        "rds-db:connect",
        "rds-data:BatchExecuteStatement",
        "rds-data:BeginTransaction",
        "rds-data:CommitTransaction",
        "rds-data:ExecuteSql",
        "rds-data:ExecuteStatement",
        "rds-data:RollbackTransaction"
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
  role = aws_iam_role.magic_kitchen.name
}
