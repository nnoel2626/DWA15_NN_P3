
DWA15 Project 3

This is the P3 Readme for Harvard Extension's Dynamic Web Applications Class.


Live URL
http://p3.nnoel-phpsite.me


Jing Screencast:
My Jing screencast url: http://www.screencast.com/users/mensah9/folders/Default/media/14f6690e-4cf2-4b9a-9825-2b9c46cce7c6




Project Description:

My web application allows users to generate random Lorem Ipsum text which derive from a 1st-century BC latin text by Cicero.
Now a days it is used mostly web deloppers  and graphic designers to demonstrate the graphic elements of a document or visual presentation.This application also allows users  to generate  random
people names, addresses, and phone numbers.  Such data is commonly used during
web development process to populate and  test databases and number of other  applications. I used  my navigation menu to integrate my password generator that I did in project 2.



Here are my routes :

λ php artisan route

+--------+---------------------------------+------+---------+----------------+---------------+
| Domain | URI                             | Name | Action  | Before Filters | After Filters |
+--------+---------------------------------+------+---------+----------------+---------------+
|        | GET|HEAD /                      |      | Closure |                |               |
|        | GET|HEAD LoremGen/{number?}     |      | Closure |                |               |
|        | GET|HEAD UserGen/{user_number?} |      | Closure |                |               |
+--------+---------------------------------+------+---------+----------------+---------------+



I used these two packages at Packagist.org

badcow/lorem Ipsum:https://packagist.org/packages/badcow/lorem-ipsum
Faker : https://packagist.org/packages/fzaninotto/faker
