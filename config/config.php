<?php
$dblocation='localhost';// всегда локалхост
$dbname='localhost';// имя
$dbuser='root';
$dbpassword='';
$dbconnect=mysqli_connect($dblocation,$dbuser,$dbpassword,$dbname);
if(!$dbconnect){
	exit('error db');
}
