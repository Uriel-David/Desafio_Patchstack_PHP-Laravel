# Desafio_Patchstack_PHP-Laravel

## How to install the project

    1º - git clone https://github.com/Uriel-David/Desafio_Patchstack_PHP-Laravel.git
    2º - composer install
    3º - npm install
    4º - php artisan migrate

## About the project

app created in laravel to consume an api with the most dangerous vulnerabilities according to the site: http://owasp.org/www-project-top-ten

The app has a CRUD fully accessible through the options, "All vulnerabilities" and "Create a vulnerability".
In the first tab you will find all the records of the api being returned, if you want to access a specific record,
just click on its title. In the specific data screen, you will find the detailed information about it and the option
"Edit" and "Delete", in the "Edit" option the user can edit the item information and in the "Delete" option the item is deleted from the database.
In the second option "Create a vulnerability", you can create a new data in the database
with a form that will require all fields, except the field that references the vulnerability ranking.

If you also want to test, there is the alternative of testing through programs such as "Postman" or "Insomia" using API routes.
The routes perform the same functionality as the forms in the app, below is the list of routes.

- Route to get-all data: http://localhost:8000/api/vulnerabilities
- Route to get-one data: http://localhost:8000/api/vulnerabilities/'vulnerabilityId'
- Route to post data: http://localhost:8000/api/vulnerabilities
- Route to update data: http://localhost:8000/api/vulnerabilities/'vulnerabilityId'
- Route to delete data: http://localhost:8000/api/vulnerabilities/'vulnerabilityId'
