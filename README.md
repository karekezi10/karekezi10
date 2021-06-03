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
login.blade.php
register.blade.php

*Layouts:
app.blade.php
Head.blade.php

*Projects:
index.blade.php
create.blade.php
Edit.blade.php
update.blade.php
show.blade.php
register.blade.php
verify.blade.php

Views:
index.blade.php
register.blade.php
bloodstore.blade.php
handover.blade.php
select.blade.php
 
ok.blade.php

*
*
this project has two video Tutorials helps for 
understand in video forder:



* Home Page
* login page presense on index hage
* Authentication (login, logout)
* 
* Search in Donar Location
* Blog with [Facebook](http://facebook.com) comments
* Search in Blog Name
* Manuel page
* Contact us page
* About us page

* Users roles : administrator (All access and Create other user), Simple user (create their own Donar profile)
* Users admin (show, edit, delete, create)
* About Donar and Blog Post  with [CKEditor](http://ckeditor.com).


## Front-end view 

### Home Page
![Home](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBank.png)

### Donar Page
![Donar](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankD.png)

### Donar Profile
![DonarP](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankDP.png)

### Blog Page
![Blog](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankB.png)

### Post Page
![Post](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankBP.png)

### 404 Page
![Page](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBank404.png)

### About Us Page
![About](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankA.png)

### Contact Us Page(Responsive Mobile Design)
![Contact](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankC.png)

### Manuel Page
![Manuel](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankM.png)

 ### LogIn Page
![LogIn](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankL.png)


## Back-end view 

Credentials to log in:

Link: https://YourDomain/login Or 

http://localhost:8000/login


Email: admin@admin.com

Password: **password**

### DashBoard Page
![DashBoard](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankDB.png)

### User Page
![User](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankU.png)

### Donar Profile index Page
![Donarindex](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankAD.png)

### Create Donar Profile Page
![CreateDonar](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankCD.png)

### Blog index Page
![Blogindex](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankAB.png)

### Create Blog Page
![CreateBlog](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankBC.png)

### Change Password
![Change](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankCP.png)



### License

Please use and re-use however you want.


## More from BloodBank Project
- Follow My [Twitter](https://twitter.com/mminhazulkabir) and [Facebook](https://www.facebook.com/MinhazulKabir)
- Email Me kabir110409@acc.edu.bd
- One user can see others profile. You can solve this problem. 
- You can show the available Blood in these project.
- You will insert your [Facebook](http://facebook.com) comments using [FacebookDevekoper](https://developers.facebook.com/) . Note: because of some unavoidable problem My [Facebook](http://facebook.com) comments do not work properly(properly).