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

test:
	php artisan test

logs:
	tail -f storage/logs/*.log
