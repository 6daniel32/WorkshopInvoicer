# Docker LAMP
A very basic local LAMP virtual environment created on a docker compose for pet projects

## Turning on your environment

1. Execute "docker compose run composer require --dev phpunit/phpunit" to install phpunit and generate the the composer files

2. Execute "docker compose run phpunit --generate-configuration" to create a basix phpunit.xml

3. Execute "docker compose up" and you will have your local lamp structure working.

## Executing tasks in your environment

1. Execute "docker compose run -rm phpunit" and you will test your code

2. Execute "docker compose run -rm composer" and you will install the dependencies