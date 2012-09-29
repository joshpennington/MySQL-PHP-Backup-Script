<?php

/**
 * MySQL Backup Script
 *
 * A very simple PHP script that creates a backup of all databases that a user
 * has access to and puts them in separate files.
 *
 * It is pretty simple to use. All you have to do is put your username and 
 * password in the $user and $password variables below and run the script.
 *
 * The only thing that could trip you up is if you are unable to run system
 * commands using the system function. To get around this you could just 
 * comment out the system function call below and pipe the output of the 
 * program to a file and run it as a batch file.
 *
 */

$user = 'username goes here';
$password = 'password goes here';

$mysql = mysql_connect('localhost', $user, $password);

$sql = "show databases";

$tables = mysql_query($sql);

while($table = mysql_fetch_array($tables, MYSQL_ASSOC)) {
  
  $db = $table['Database'];
  
  $command = "mysqldump -u $user -p$password $db > $db.sql";

  echo $command . "\n";
  system($command);
}

echo "Done!" . "\n";;