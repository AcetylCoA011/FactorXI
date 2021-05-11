<?php
$db_host = 'localhost:8889';
$db_user = 'pavi';
$db_pwd = 'fa@edborg';

$database = 'facxi';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
?>
