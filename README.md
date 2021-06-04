# About the project
This is the training project "Review Management System"
# Requirements

* PHP 7.2.9 or higher;
* Symfony 5
* The usual Symfony application requirements.

# How to install this project
1. git clone https://github.com/hassan333-cyber/review_managment_system
2. cd projectName
3. composer install
4. symfony server:start -d
5. Browse http://127.0.0.1:8000

The project comes with sample database, but you can also create your own database and load the fixtures data:
1. Edit the DATABASE_URL env var in the .env file to use your database credentials
2. php bin/console doctrine:database:create
3. symfony console doctrine:migrations:migrate
4. symfony console doctrine:fixtures:load ( for the products)

 Now Registered yourself as an admin, for this hit the route with http://127.0.0.1:8000/register.
 That route registered you as an admin with following credential 
* email: "admin@it.com"
* password: "123456"

