
$ mysql -u first -p

# list users from the database
select user from mysql.user;

# show databases
show databases;

# change to database
use logbook;

# create user



$ mysql -u root -password=s.......

CREATE USER 'logbook'@'localhost' IDENTIFIED BY 'logbook';

grant all privileges on logbook.* to logbook@localhost;

$ mysql -u logbook --password logbook
use logbook
create table logs (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	site VARCHAR(20) NOT NULL,
        engineer VARCHAR(20) NOT NULL,
	logtype VARCHAR(20) NOT NULL,
	logdate DATETIME NOT NULL,
	logcomment VARCHAR(100) NOT NULL
       );



