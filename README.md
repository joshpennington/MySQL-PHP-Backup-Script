MySQL-PHP-Backup-Script
=======================

A very simple PHP script that creates a backup of all databases that a user
has access to and puts them in separate files.

It is pretty simple to use. All you have to do is put your username and 
password in the $user and $password variables and run the script.

The only thing that could trip you up is if you are unable to run system
commands using the system function. To get around this you could just 
comment out the system function call below and pipe the output of the 
program to a file and run it as a batch file.