#!/usr/bin/env bash
set +x

# Public URL:          http://bedandbreakfasttintern.co.uk
#
# Amazon S3 Bucket:    http://bedandbreakfasttintern.co.uk.s3-website.eu-west-2.amazonaws.com/Front.html
# - Bucket:     bedandbreakfasttintern.co.uk - Static website hosting - Use this bucket to host a website
# - Bucket: www.bedandbreakfasttintern.co.uk - Static website hosting - Redirect requests: bedandbreakfasttintern.co.uk
#
# Amazon Route53 DNS:  https://console.aws.amazon.com/route53/home#hosted-zones:
# - Hosted Zones:
#     bedandbreakfasttintern.co.uk: NS      ns-280.awsdns-35.com | ns-1953.awsdns-52.co.uk | ns-762.awsdns-31.net | ns-1464.awsdns-55.org
#     bedandbreakfasttintern.co.uk: A ALIAS s3-website.eu-west-2.amazonaws.com. (z3gkzc51zf0db4)
# www.bedandbreakfasttintern.co.uk: A ALIAS bedandbreakfasttintern.co.uk. (zkoijilx05znw)

aws s3 sync ./ s3://bedandbreakfasttintern.co.uk --acl public-read --exclude '*.zip' --exclude '.idea/*' --exclude '.git/*'
