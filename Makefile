#short command for run project
run:
	docker-compose up -d

#stop project containers
stop:
	docker-compose down

#build project containers
build:
	docker-compose up -d --build
	docker exec laravel_php-fpm composer install
	docker exec laravel_php-fpm php artisan migrate
	docker exec laravel_php-fpm php artisan db:seed

