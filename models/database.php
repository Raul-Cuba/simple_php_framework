<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'raul');
define('MYSQL_PASSWORD', '888');
define('MYSQL_DB', 'blog');

function db_connect(){
    //echo "SOEDINYAUS!";
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,MYSQL_PASSWORD, MYSQL_DB);
    //var_dump($link);
	if(mysqli_error($link))
	       die("OSHIBKA! : ".mysqli_error($link));
	if (!mysqli_set_charset($link, "utf8")) {
		echo("Error: ".mysqli_error($link));
	}
	return $link;
}