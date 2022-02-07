setup:
	composer install
	cp -n .env.example .env|| true
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate:fresh
	php artisan db:seed
	npm install
	npm run dev

setup-sweb:
	php8.0 composer.phar install
	cp -n .env.example .env|| true
	php8.0 artisan key:gen --ansi
	php8.0 artisan migrate:fresh
	php8.0 artisan db:seed
	npm install
	npm run prod

seed:
	php artisan migrate:fresh
	php artisan db:seed

seed-sweb:
	php8.0 artisan migrate:fresh
	php8.0 artisan db:seed

lint:
	php composer.phar phpcs

lint-sweb:
	php8.0 composer.phar phpcs

test:
	php artisan test

test-sweb:
	php8.0 artisan test

run:
	npm run watch

logs:
	tail -f storage/logs/*.log
