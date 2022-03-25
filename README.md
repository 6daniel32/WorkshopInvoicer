# DockerLAMP
A very basic local LAMP virtual environment created on a docker compose for pet projects 

1. Execute "docker compose run composer require --dev phpunit/phpunit" to install phpunit and generate the the composer files

2. Execute "docker compose run phpunit --generate-configuration" to create a basix phpunit.xml

3. Execute "docker compose up" and you will have your local lamp structure working.

4. Execute "docker compose run phpunit" and you will test your code

5. Execute "docker compose run composer" and you will install the dependencies