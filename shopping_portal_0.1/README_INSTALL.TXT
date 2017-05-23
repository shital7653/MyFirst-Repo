AUTHOR: Ankit Gupta (ankigupt@gmail.com)  ASE Trainee at Tata Consultancy Services




Extract the project file in document root of the server.


Restore the database in mysql server using the command.


mysql -u username -p password database_name < shopping_portal.sql

Create all procedutes by:

mysql -u username -p password database_name < database_procedures/file_name.sql



The database information can be edited in single file:

model/db.php

		$db_dsn="mysql:dbname=shopping_portal;host=localhost;port=3306";
		$db_user="root";
		$db_passwd="";
		
		
		
The admin panel is located at http://site_name.com/admin   which can be protected uing apache basic authentication. 

d t
The menu of site can be edited in menu.php
The layout and view of site can be ealisy changed through   'view/css/layout.css', 'view/css/forms.css' and 'view/css/menu.css'


The MVC based pattern is followed:

Model - Contains all the database files.
View  - Contains the forms and files that include html
Controler - communicates with Model and View.


The database is having the stored procedures and stored functions included which are executed through latest PDO technology of PHP.
This provide the database independance with similar type of stored function and procedure on other database.







