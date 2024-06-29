up:
	docker-compose up -d
up-fresh:
	docker-compose up -d --build --force-recreate
stop:
	docker-compose stop
down:
	docker-compose down
shell:
	docker-compose exec --user=1000 laravel.test bash
