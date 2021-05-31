# Laravel Api Rest


Simple example of a REST API with Laravel 7.x

## Install with Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Run migrations and seeds

```
   $ php artisan migrate --seed
```

## Accesos Instituciones
```
    
    GET http://127.0.0.1:8000/api/institutions
    GET http://127.0.0.1:8000/api/institutions/:id
    POST '{"name":"Empresa 1","phone":"444888777","email":"empresa1@prueba.com"}' http://127.0.0.1:8000/api/institutions
    PUT '{"name":"Empresa 1","phone":"444888777","email":"empresa1@prueba.com"}' http://127.0.0.1:8000/api/institutions/:id
    DELETE http://127.0.0.1:8000/api/institutions/:id

```

## Accesos Mascotas
```
    
    GET http://127.0.0.1:8000/api/pets
    GET http://127.0.0.1:8000/api/pets/:id
    POST '{"id": 1,"name": "Jackitop","specie": "Perro","breed": "Tosa Inu","birth_date": "10/19","photo": null,"institution": "empresa 1"}' http://127.0.0.1:8000/api/pets
    PUT '{"id": 1,"name": "Jackitop","specie": "Perro","breed": "Tosa Inu","birth_date": "10/19","photo": null,"institution": "empresa 1"}' http://127.0.0.1:8000/api/pets/:id
    DELETE http://127.0.0.1:8000/api/pets/:id

```

## Accesos Razas / Especies
```
    
    GET http://127.0.0.1:8000/api/breeds

```

