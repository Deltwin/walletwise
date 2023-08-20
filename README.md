![Screen](https://raw.github.com/Deltwin/walletwise/master/web/images/favicon-32x32.png) WalletWise
=================================

WalletWise (New [Economizzer](http://www.economizzer.org)) is a simple and open-source personal finance manager system made in PHP [Yii Framework 2](http://www.yiiframework.com).

It is available in the following languages:  Italian, English, Spanish, Portuguese, Russian, Korean, Hungarian and French.

![Screen](https://raw.github.com/Deltwin/walletwise/master/web/images/screen.png)

Learn more the features on the wiki: [WIKI](http://github.com/Deltwin/walletwise/wiki/)


Live Demo
------------
Unfortunately, we don't have a real demo site but there is the old one of the original creator.

You can try the old one demo site: [www.economizzer.org/web](http://www.economizzer.org/web)

> Use the user "joe" and password "123456".

We'll add more features in the future so that site we'll be too old to try the new functionalities! Support us to buy a demo domain. Thank you!


Requirements
------------

The minimum requirement by this application that your Web server supports PHP >=7.0.0 and either apache2 or nginx.

> Required libraries: MySQL, php, composer, libapache2-mod-php, php-mbstring, php-xml, php-curl


Installation
------------
~~~
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 (or nginx) -y
sudo apt install curl php composer libapache2-mod-php php-mbstring php-xml php-curl mysql-server -y
git clone https://github.com/Deltwin/walletwise.git
cd walletwise
composer update && composer install
~~~
* You need to configure yourself MySQL and apache2 for your domain. If you need help visit the wiki page: [WIKI](http://github.com/Deltwin/walletwise/wiki/)


Configuration
-------------

In folder **walletwise/config/db.php** set as your parameters:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=walletwise',
    'username' => 'root',
    'password' => '<yourpassword_or_leave_blank>',
    'charset' => 'utf8',
    'enableSchemaCache' => true,
];
```

And import the database sql file

> inc/walletwise.sql


To test, go to **http://yourserver/web** (NOTE: This path is only for who has the WalletWise folder in the root of the /var/www/html folder) with user and password below:

> Use the user "admin" and password "123456".


Contribution
-------------
Please see [CONTRIBUTING](CONTRIBUTING.md).


License
-------------
Economizzer is Copyright © 2014 Gustavo G. Andrade. 
WalletWise is Copyright © 2023 Deltwin.
It is free software, and may be redistributed under the terms specified in the
[LICENSE](LICENSE.md) file.


Donations
-------------
To encourage the developer with new enhancements, buy a demo domain, or even to buy him a good beer, support the project by making a [Donation](http://paypal.me/pay2secure).


Thanks to
-------------
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com)
[Gugoan](https://github.com/gugoan/economizzer)
