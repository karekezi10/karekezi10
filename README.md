## Laravel Blood Bank Management System
* Laravel Framework 8.0
* Bootstrap 5

## Laravel Blood Bank Management System Author:

* 18RP00452 Gustave KAREKEZI
* 18RP08714 MUHIMPUNDU Dallia

### Installation 

* `git clone https://github.com/18RP00452&18RP08714/BloodBank.git projectname`
* `cd projectname`
* `composer install`
* `composer update`
* `php artisan key:generate`
*  Prepare your .env file there with database connection and other settings. 
* Notice: You must know admin password in order to prosid the series of activities **
* `php artisan vendor:publish` to publish filemanager
* `php artisan serve` to start the app on http://localhost:8000/

### System Criedential :

Administration:dallia@gmail.com
password:1234567890


### Feature
     ---------------
This Project acocommodent Tree parts of MVC:
 First is Models

 ## Our Model Directory contains:
*blood_inventory.php
*bloodstore.php
*Project.php
*user.php


##Controllers"
*Directory in Controller:
*Auth
*Middleware
files:
* Puth:pp\Http\Controllers this is puth for controller Directory
* ProjectController:this Controller helps to control blood Donors either register,update,delete of record.
* Blood_inventoryController.php: this Controller helps to control blood record.
* Bloodstore.php:manages store of blood in database either retrieve of record;
*HomeController:manage home page

## Views(Front-end view ):
#Directories:
auth:
*login.blade.php
*register.blade.php

*Layouts:
*app.blade.php
)Head.blade.php

*Projects:
---------
*index.blade.php
*create.blade.php
*Edit.blade.php
*update.blade.php
*show.blade.php
*register.blade.php
*verify.blade.php

Views:
---------
*index.blade.php
*register1.blade.php
*bloodstore.blade.php
*handover.blade.php
*select.blade.php
 *ok.blade.php
* Home Page
* login page presense on index hage
* Authentication (login, logout)
*
##Picture Directory:

-includes the pictures show how system it work by pictures
-this pictures includes how system works step by step
from index page up to admin page same as video.
*this project has two video Tutorials helps for 
##Video Directory:
 understand in video forder:
*1(1).mp4
*1(2).mp4
##System OverView
------------------
Blood Bank Management System (BBMS) is a web based system that can assists the information of blood bank during its handling in the blood bank.
With this system, the user of this system can key in the result of blood test that has been conducted 
to each of the blood bank received by the blood bank.And also this system is developed by using laravel 8.0
via this system Volunteer are able to be registered  as blood Donor and also his\her record is managed properly.


##Problem statements
--------------------
-The major problem in old Blood banking systems was that they don’t follow the actual needs of users.
-Tracking the database was complicated when the details are maintained manually.
-There was a shortage and sometimes unavailability of rare blood groups due to fewer modules i.e. patient and donors.
-data will be losen simply.

##use case1
--------
-A better idea is to using this system but it still under development.
-This application is providing each entity the facility to approach nearby blood donors so that it will become much easier 
  to search blood groups in the hour of need when our project it was successfull implemented.
-to manager communication between blood Donor, petient and blood bank  will be easy. 



##Aims & Statements
-------------------
-To bridge the gap between blood banks, hospitals, volunteer donors and needy people, through this system.
-To facilitate the search process for needy people and make it easier than before.
-To reduce the data entry process.
-To provide dynamic database that is storing donors Information and can communicate with them easily.

##use case2
-----------------------
-is to manage blood bank  efficiently  as it called Blood bank Management system and produce good interactive between blood bank Administraction,blood Donors and patient.
- admin of system will be able view report ,add Blood donor, add blood with volume and prove blood request

##Limitation
----------------
-low skills about framework installation and workflow.
-low skills about MVC(Model View and Contreller)
-time were litter becouse of study of defferent modules



 
