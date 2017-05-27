<?php 
// recuperation de l'heure actuelle
$date_actuelle=date("Y-m-d H:i:s");

// recuperation de l'adresse ip du client ,on cherche d'abord  a savoir si il est derriere un proxy

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$IP=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ip=$_SERVER['HTTP_CLIENT_IP'];
}
else{
	$ip=$_SERVER['REMOTE_ADDR'];
}

// RECUPERATION DU DOMAINE DU CLIENT
$host=gethostbyaddr($ip);

//recuperation du navigateur et de l'os du client

$navigateur=$_SERVER['HTTP_USER_AGENT'];

//RECUPERATION DU REFERENCE

if (isset($_SERVER['HTTP_REFERER'])){

	if(eregi($_SERVER['HTTP_HOST'], $_SERVER['HTTP_REFERER'])){

$REFERER='';
	}
   else{
   	$REFERER=$_SERVER['HTTP_REFERER'];
   }
}
else{
	$REFERER='';

}

///recuperation du nom de la page courante

if ($_SERVER['QUERY_STRING']=="") {

	$PAGE_COURANTE=$_SERVER['PHP_SELF'];
}
else{

	$PAGE_COURANTE=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
}

//connection a  la base de donnees
//Our MySQL user account.
define('MYSQL_USER', 'root');
 
//Our MySQL password.
define('MYSQL_PASSWORD', 'TABITHA');
 
//The server that MySQL is located on.
define('MYSQL_HOST', 'localhost');
 
//The name of our database.
define('MYSQL_DATABASE', 'statistique');
 
/**
 * PDO options / configuration details.
 * I'm going to set the error mode to "Exceptions".
 * I'm also going to turn off emulated prepared statements.
 */
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
 
/**
 * Connect to MySQL and instantiate the PDO object.
 */
$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $pdoOptions //Options
);
 
//The PDO object can now be used to query MySQL.

$sql='insert into statistiques values ("",'".$date_actuelle."','".$PAGE_COURANTE."','".$ip."','".$host."','".$navigateur."','".$REFERER."')';
$pdo->query($sql);


