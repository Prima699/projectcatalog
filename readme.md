ProjectCatalog

For Database :
- you can run command php artisan migrate
or
- The database on Folder db "projectcatalog.sql" just import to your database. 

First to do :
- Execute command "php artisan key:generate"
- And "composer dump-autoload"

Documentation API : 
Header -> Accept       = application/json
            -> Authoriztion = "token"
   
GET all product list             
the url API your local"/api/products"

GET all product list with id             
the url API your local"/api/products/(id product)"

PUT Update specific product by id             
the url API your local"/api/products/(id product)"
body request :
  {
    "name_product" : "new product",
    "id_categori" : "category ID",
    "flag" : "0",
    "price" : 100000
  }

DELETE specific product by id
the url API your local"/api/products/(id product)"

*09/10/2020*
I imagine the things I can improve next for this app
Need to improve :
- Automaticly installation
  Like we not should import DB just running command migrate and seed
- More a lot table for component Product, like Brand, dimensions, etc
- The role management
- Statistic diagram at Dashboard after login
- Menu autogeneric read from database table Menu and permission and menu will autogeneric created
- More Validation form include
- Price input auto generate following Rupiah currency or dollar
- Image of product_pic must be fixed
- Flagging for product can be displayed at Frontend Web

from me just that things I should update next 
that's it from me, I start develop from wednesday 7th. sorry my fault not checking my mail inbox.

Productcatalog from Prima Rizchi Anaitulloh, hope I can join with you all .........
you can catch up on me at my mail or phone number, I suggest with my phone number via Whatsapps 

