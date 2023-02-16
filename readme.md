## About dailyapi
- this api aims to assemble a database so that patterns can be found and graphs and data analysis can be created

## To run
    touch .env file
    composer install
    php artisan migrate
    php artisan serve

### GET
- api/user
- api/user/{id}
- api/daily
- api/keyword
- api/keyword/{id}
## POST
- api/daily
- api/user
- api/keyword
## PUT
- api/keyword/{id}
- api/user/{id}
## DELETE
- api/daily/{id}
- api/keyword/{id}
- api/user/{id}
