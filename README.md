# Project Title

Basic API and horribly basic front-end for Ladbrokes echnical assessment

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

* PHP 7
* php-sqlite
* sqlite

### Installing

A step by step series of examples that tell you have to get a development env running

Clone the Project and change dir into the ladbrokes-api folder

```
git clone https://github.com/es02/ladbrokes.git
cd ladbrokes/ladbrokes-api
```

Create local .env file

```
cp .env.example .env
```

Run migrations and seeds

```
artisan migrate:install
artisan migrate
artisan db:seed
```

Run everything

```
cd ..
chmod +x runme.sh
./runme.sh
```
Open a browser to http://localhost:8001

## Running the tests

Client page has 0 tests
API: cd to ladbrokes-api folder and run tests:
```
php ./vendor/bin/phpunit
```

## Deployment

* git Clone
* composer install


## Built With

* [Lumen](https://lumen.laravel.com) - The web framework used
* [Twig](https://twig.symfony.com) - Used to generate templates for client


## Authors

* **Tom Hobson** - *Initial work* - [es02](https://github.com/es02)
