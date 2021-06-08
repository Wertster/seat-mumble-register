![SeAT](http://i.imgur.com/aPPOxSK.png)
# SeAT Mumble Register

This plugin provide an extension to generate a certificate for SeAT user and regist it to mumble server

## Installation

### for non-Docker

Assume your SeAT root path is `/var/www/seat` and run this code

```php
php artisan down
composer require alliancewaw/seat-mumble-register

php artisan vendor:publish --force --all
php artisan migrate
php artisan up
```

### for Docker

Edit your `.env` file,locate the line `SEAT_PLUGINS` and append `alliancewaw/seat-mumble-register` at the end.

Then , run `docker-compose up -d` to take effect.
