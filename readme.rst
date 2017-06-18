###################
Codeigniter with Mysql and Mongo DB
###################

This repository have integrated with Mysql and MongoDB

*****************
Configuration
*****************
Modify database credentials for Mysql database, username and password on below path

-`application/config/database.php`

Modify database credentials for mongoDB

-`application/config/mongo_db.php`

-Before executing this application make sure start the mongoDB

###################
Execute Application
###################
After mysql and mongodb configuration create table in mysql by below command

```
php index.php migrate "users"
```

localhost/codeigniter-mysql-mongo/users
