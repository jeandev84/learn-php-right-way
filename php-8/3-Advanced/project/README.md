# MVC

Docker 
```
$ docker compose up -d --build
$ docker exec -it programwithgio-app bash
$ docker exec -it programwithgio-db bash
$ docker compose stop
```

Unit Tests
```
$ ./vendor/bin/phpunit
$ ./vendor/bin/phpunit --filter test_there_are_no_routes_when_router_is_created
$ ./vendor/bin/phpunit tests/Unit/Services/InvoiceServiceTest.php
```