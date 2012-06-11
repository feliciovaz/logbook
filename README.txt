
Installed YII

$HOME/yii-1.1.10.r3566

-----------------------------------------------------------------------

Online docs:

http://www.yiiframework.com/

http://www.larryullman.com/series/learning-the-yii-framework/

http://yiiradiio.mehesz.net/

-----------------------------------------------------------------------
Kindle books:

Agile Web Application Development with Yii1.1 and PHP5 - Jeffrey Winesett

Yii 1.1 Application Development Cookbook - Alexander Makarov


-----------------------------------------------------------------------

Test Yii installation

http://laptop.yii.com/requirements/

-----------------------------------------------------------------------

Installed PEAR

sudo apt-get install php-pear
sudo pear upgrade-all
sudo pear channel-discover pear.phpunit.de
sudo pear channel-discover pear.symfony-project.com
sudo pear install -a phpunit/PHPUnit
sudo apt-get install curl libcurl3 libcurl3-dev php5-curl
sudo pear install phpunit/PHPUnit_Selenium




-----------------------------------------------------------------------

Created trackstar application

felicio@felicio-laptop:~/projects/logbook/yii$ yiic webapp trackstar

Added trackstart to /etc/apache2/httpd.conf
<VirtualHost *:80>
        DocumentRoot /home/felicio/projects/logbook/yii
        ServerName trackstar.yii.com
</VirtualHost>

felicio@felicio-laptop:~/projects/logbook/yii$ sudo service apache2 restart
 * Restarting web server apache2                                                 ... waiting                                                             [ OK ]


Access the web application with:
http://trackstar.yii.com/trackstar/index.php?r=site/login





