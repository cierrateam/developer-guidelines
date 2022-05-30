---
title: AnyHelpNow Server Setup
description: NGINX configuration
extends: _layouts.documentation
section: content
---

# Setup Forge NGINX config file

```
# FORGE CONFIG (DO NOT REMOVE!)
include forge-conf/www.anyhelpnow.com/before/*;

server {
listen 443 ssl http2;
listen [::]:443 ssl http2;
server_name www.anyhelpnow.com;
server_tokens off;
root /home/forge/www.anyhelpnow.com/public;

    # FORGE SSL (DO NOT REMOVE!)
    ssl_certificate /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.crt;
    ssl_certificate_key /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.key;

    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_dhparam /etc/nginx/dhparams.pem;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    # FORGE CONFIG (DO NOT REMOVE!)
    include forge-conf/www.anyhelpnow.com/server/*;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    access_log off;
    error_log  /var/log/nginx/www.anyhelpnow.com-error.log error;

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}

server {
listen 443 ssl http2;
listen [::]:443 ssl http2;

    # FORGE SSL (DO NOT REMOVE!)
    ssl_certificate /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.crt;
    ssl_certificate_key /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.key;

    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_dhparam /etc/nginx/dhparams.pem;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

server_name anyhelpnow.de;
return 301 http://www.anyhelpnow.com$request_uri;
}

server {
server_name anyhelpnow.de;
return 301 http://www.anyhelpnow.com$request_uri;
}

server {
listen 443 ssl http2;
listen [::]:443 ssl http2;

    # FORGE SSL (DO NOT REMOVE!)
    ssl_certificate /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.crt;
    ssl_certificate_key /etc/nginx/ssl/www.anyhelpnow.com/1428968/server.key;

    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_dhparam /etc/nginx/dhparams.pem;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

server_name www.anyhelpnow.de;
return 301 http://www.anyhelpnow.com$request_uri;
}

server {
server_name www.anyhelpnow.de;
return 301 http://www.anyhelpnow.com$request_uri;
}

server {
server_name anyhelpnow.com;
return 301 http://www.anyhelpnow.com$request_uri;
}


# FORGE CONFIG (DO NOT REMOVE!)
include forge-conf/www.anyhelpnow.com/after/*;
```

# Setup statamic {#setup-satamic}

See readme file
