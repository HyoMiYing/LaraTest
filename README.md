# LaraTest
Laravel applicatin with Vue frontend in Docker

Setup insructions:

1. Clone the repository
2. Navigate to folder LaraTest/src/storage and set the permissions to read & write
3. Navigate to base folder (containing docker-compose.yml and Dockerfile)
4. Run <code>docker-compose build</code>
5. Run <code>docker-compose up -d</code>
6. Run <code>docker-compose exec php php /var/www/artisan migrate</code>

7. The application is now available on http://localhost:8080/
