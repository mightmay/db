# 



FIRST, create the tables in the databases by following these steps:


open and edit this file: createdatabase.php

on the line that said: $DatabaseName = 'dle232';
change the "dle232" to your UK user id,


then on the line that said: $mysqlUser = 'dle232';
also change it to your UK user id,

then on the line that said: $mysqlPassword = 'u0816536'; 
change it to your mysql password it should be 'u'+last 7 digits of UKID
Example:  If UKID=100123456 then initial password is 'u0123456'(without the single quotes) 


now you can run the file to create the database by using this command: "php createdatabases.php"

that's all, the tables have been created in your database.

