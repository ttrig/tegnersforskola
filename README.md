# tegnersforskola.se

## Quickstart

```shell
cp -n .env-example .env

composer install

npm install
npm run dev

php artisan serve # visit http://localhost:8000
```

### Browser sync

```shell
php artisan serve

npm run watch # visit http://localhost:3000
```

## Test

```shell
vendor/bin/phpunit
vendor/bin/pint --test
```
