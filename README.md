# Demo app for run php-apache,mysql and phpMyadmin using containers

## All components are docker-based

Step 1: Create folder app and put inside compose.yml file.
Step 2: Create folder php inside app folder.
Step 3: Put inside php folder, index.php and Dockerfile.
Step 4: Go to docker-compose.yml file location and execute the following command. This will create three docker containers for PHP,Mysql and phpMyadmin.

    docker-compose up 

Step 5: Access phpMyadmin from:

    http://localhost:8081/ 

Step 6: Sign in:

    user: root
    password: paSSword


Step 7: Create taks table using this query:

    CREATE TABLE `app`.`tasks` 
    (`id` INT NOT NULL AUTO_INCREMENT , `task` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) 
    ENGINE = InnoDB; 

Step 8: Insert data using web browser from:

    http://localhost:8000/    