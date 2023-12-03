build: ## Rebuild Docker images
	#docker-compose build
	docker-compose build --no-cache
	make up

stop: ## Stop Docker containers
	docker-compose stop

down: ## Remove Docker containers
	docker-compose down

delete-images: ## Remove Docker images
	docker rmi -f $(docker images -a -q)

up:	## Run Docker containers in the background
	docker-compose up -d

exec: ## Open an interactive shell (Bash) inside a running Docker container
	docker exec -it php_7_vs_8_container bash

restart:
	make stop
	make up

pint-test:
	./vendor/bin/pint --test

pint-v:
	./vendor/bin/pint -v

pint-refactor:
	./vendor/bin/pint
