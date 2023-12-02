resource "aws_route53_zone" "main" {
  name = var.domain_name
}


resource "aws_route53_record" "main" {
  zone_id = aws_route53_zone.main.zone_id
  name    = "${var.domain_name}"
  type    = "A"
  alias {
    name                   = aws_lb.hasinaMagicKitchen-lb.dns_name
    zone_id                = aws_lb.hasinaMagicKitchen-lb.zone_id
    evaluate_target_health = true
  }
}

resource "aws_route53_record" "wwww" {
  zone_id = aws_route53_zone.main.zone_id
  name    = "wwww.${var.domain_name}"
  type    = "NS"
  ttl     = "30"
  records = aws_route53_zone.main.name_servers
}