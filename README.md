# Docker LAMP
A very basic local LAMP virtual environment created on a docker compose for pet projects

## Turning on your environment

1. Add a .env file with the expected environment vars (see .env.example)

2. Execute "docker compose run --rm composer require --dev phpunit/phpunit:9.5" to install phpunit and generate the the composer files

3. Execute "docker compose run --rm phpunit --generate-configuration" to create a basix phpunit.xml

4. Execute "docker compose up" and you will have your local lamp structure working.

## Executing tasks in your environment

1. Execute "docker compose run --rm composer 'composer_command'" and you will execute a composer command

2. Execute "docker compose run --rm phpunit" and you will test your code

3. Execute "docker compose run --rm composer install" and you will install the dependencies

4. Execute "docker compose run --rm composer dump-autoload" to refresh the autoloader