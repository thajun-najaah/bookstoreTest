Bookstore - 99X
==============
Description:
reate a book store application using Symfony framework, You should use MySQL DBMS to create a suitable database that is capable of storing the required data for the assignment. you should be able to host the application in your local host environment.
Following are the features required.

    1. You should store books of two categories (ex: Children, Fiction) and list them for users to buy on the home page of the application. Users should be able to list the books by category.
    2. Users can add the books to the shopping cart and remove them when needed from the cart. The total price should be shown on the application all the time and should change based on the books in the cart.
    3. On checkout, users should see a full invoice with details of the purchase.
    4. When calculating the price, the following conditions should be satisfied
      • If you buy 5 or more Children books you get a 10% discount from the Children books total
      • If you buy 10 books from each category you get 5% additional discount from the total bill
      • If you have a coupon code (which you can enter and redeem from the invoice page itself) you get a 15% discount for the total bill. In this case, all other discounts will be invalidated.


Steps Required: 
==============

Step 1

Run `composer install`

Step 2

Config database

Step 3
I have written database migration so, 
Create Database : `php bin/console doctrine:database:create`

Step 4

Create Schema: `php bin/console doctrine:schema:update --force`

Step 5

Feed the database `php bin/console doctrine:fixtures:load`

Step 6

Run the application: `php bin/console server:start`

or you can place the folder in local server and open in the browser.

Test Cases

`./vendor/bin/simple-phpunit`


Special Note:
=============
* Coupon stored in coupon table.
* Discount details are stored in the catergory table.
* Cart Total Value rounded for two decimal places.
* Since there are no any user registration, cart's books store using a unique id. 
when user close the browser, cart item will         be lose.

