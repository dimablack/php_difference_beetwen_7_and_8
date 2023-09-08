# Docker PHP8.2 PostgreSQL Nginx

Docker Compose configuration to run PHP 8.2 with Nginx, PHP-FPM, PostgreSQL

### Services:

- php (PHP 8.2 with PHP-FPM)
- db (PostgreSQL 15)
- web (Nginx)

## Requirements

- **Docker:** Ensure you have a stable version of [Docker](https://docs.docker.com/engine/install/) installed.
- **Docker Compose:** Make sure you have a compatible version of [Docker Compose](https://docs.docker.com/compose/install/#install-compose).

## How To Deploy

___
___
### Initial Setup

### For the first time only:

```bash
cp .env.example .env
```

```bash
docker-compose up -d
```
---
    docker exec -it php_8_2_container bash
    composer install
or
```bash
docker exec php_8_2_container bash -c 'composer install'
```
___
___
### From the Second Time Onwards:
```bash
docker-compose up -d
docker exec -it php_8_2_container bash
```
___
___
### Rebuild Docker images:
```bash
docker-compose build
```
#### *without cache
```bash
docker-compose build --no-cache
```
___
___
### Install additional packages:
```bash
docker exec php_8_2_container bash -c 'composer require --dev phpunit/phpunit'
```
___
___

### Stop Docker containers
```bash
docker-compose stop
```

#### Stop and remove Docker containers, networks, and volumes created by

```bash
docker-compose down
```
___
___

## Open an Interactive Shell (Bash) Inside a Running Docker Container

### php
```bash
docker exec -it php_8_2_container bash
```
### pgsql
```bash
docker exec -it postgres_15_container bash
```

