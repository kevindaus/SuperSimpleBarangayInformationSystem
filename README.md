Barangay Information System
============================



Features : 

  * Manage resident information.
  * Request barangay certificate.



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports 
* PHP 5.4.0.
* Mysql  Ver 14.14 Distrib 5.6.17

INSTALLATION
------------

* Create database. 
* Update the configuration file located at protected/config/main.php  , line 65
* Update the configuration file located at protected/config/console.php  , line 15
* Pull dependencies. composer install
* Run migration script. Make sure you are at BarangayInformationSystem/protected/
	* php -f yiic.php migrate --migrationPath=application.modules.rights.migrations
	* php -f yiic.php migrate --migrationPath=application.modules.user.migrations
	* php -f yiic.php migrate



**TODOS / SUGGESTIONS:**
------------
	* Increase scope  , make it Provincial
	* Report charts
		- population chart
		- voters count
		- 



Screenshots
-------------
![Alt text](/screenshots/dashboard.PNG?raw=true)
![Alt text](/screenshots/2.PNG?raw=true)
![Alt text](/screenshots/6.PNG?raw=true)
![Alt text](/screenshots/7.PNG?raw=true)