setup:
	composer install
	cp -n .env.example .env|| true
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed
	npm install

seed:
	php artisan migrate:fresh
	php artisan db:seed

lint:
	composer phpcs

test:
	php artisan test

run:
	npm run watch

logs:
	tail -f storage/logs/*.log

release:
	php artisan migrate --force
	npm run production
