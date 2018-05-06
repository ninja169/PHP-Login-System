<?php

if(!defined('__CONFIG__')){
    exit('You do not have a config file');
};



//Include database file DB.php

include_once "/classes/DB.php";
$con = DB::getConnection();
?>
