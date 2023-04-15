<?php
$db = mysqli_connect('db', 'root', 'MYSQL_ROOT_PASSWORD') or die('blad polaczenia'); 
if(!$db) die('błąd bazy connect'.mysqli_error());
mysqli_select_db($db,"czat");
?>