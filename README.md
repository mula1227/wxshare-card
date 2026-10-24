# WxShare Card

PHP / MySQL WeChat share-card generator, adapted for local Docker execution.

## Run

```sh
docker compose up -d --build
```

Open http://127.0.0.1:8086/creat.html . Stop with `docker compose stop`.
Database data persists in a Docker volume. Local card creation, image uploads, QR codes and redirects are supported.

Real WeChat sharing requires a public domain, official-account AppID/AppSecret and JS security-domain configuration. GitHub Pages cannot execute this PHP/MySQL application.

## Configuration

Database credentials are local development defaults. Set WECHAT_APP_ID and WECHAT_APP_SECRET in the web container environment for WeChat integration. Never commit real credentials or token caches.

## Before public deployment

Legacy SQL construction, missing authentication and upload access controls require security work before exposing this application. Docker currently binds to localhost only.

## Source and licensing

Provided archive identifies WxShare and references https://github.com/likeyun/TANKING . No application license was supplied. This is a public source archive, not a grant of rights to the original author's work. No MIT or other application license is asserted. Third-party libraries retain their own license notices (PHP QR Code LGPL, Bootstrap and jQuery MIT).
