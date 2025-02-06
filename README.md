# Market app

- Web market app with *Laravel*

# Techologies used
- 26.1.1 docker
- 11.21.0 laravel
- nginx-alpine
- 8.2.11 php-fpm
- 2.7.9 composer
- 11.2 mariadb
- 20.17.0 nodejs
- 10.8.2 npm
- tailwind

# Setup
 - Before getting the setup, please review the default hosts port used
   - 8080 - web app
   - 9000 - php-fmp
   - 3306 - mariadb
   - 8081 - phpmyadmin
 - **In order to change the default host ports please use the docker ```.env``` to change those ports**

 - **To setup the whole application with all the environment, you need to run ONLY**:
```
 make setup
```
The upper command will get all containers up and run and also:
 - run the migrations
 - run the seeders
 - run npm install
 - run npm build

After the setup is ready you will be apple to reach the app on
```
    http://localhost:8080/products
    http://localhost:8080/promotions
    ...
    
```
Note that the default page ```http://localhost:8080``` is the Laravel default one.

In order to stop and remove all containers, use:
```
 make down
```

# Application DEV
 - Technical Guidelines
   - Repository Pattern principles applied.
   
 - Requirments done:
   - Implemented a solution for a supermarket checkout process that calculates the total price of a number of items.
   - Extra credit 1 (DONE via ```docker compose```, ```Dockerfile``` and ```make commands```)
   - Extra credit 2 (tests are missing, although I encourage and use them)
   - Extra credit 3 (```CRUD``` operations are performed for only for ```Product resource```)

 - Application usage:
   - Consider, on preview order, before it's completed, there is breakdown for each product - which is with promotion and percentage applied, some done for those withour promotion.
   - Consider ```Product Delete``` is not actual delete, but ```soft delete```. This is done in order to fetch the completed order, although the product is not available.
   - Due to styling reasons it's not very clear when the ```Buy``` button is disabled, once it's clicked (this is done in order to reduce to 1 buy order click per product)
   - Ignore Login, as it was thoughtfully to be available for all ```CRUD``` operations, and protecting ```CRUD``` routes via ```Auth Facade```, but it's not completed.