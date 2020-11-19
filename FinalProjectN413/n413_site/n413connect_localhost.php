<?php
/**
 * Author : Kalene Kingery
 * Date:
 * File:
 * Description
 */


//FOR HOSTED VERSION

$dbhost = 'localhost:8889'; //XAMPP is 'localhost:3306'
$dbuser = 'root';
$dbpwd = 'root'; //XAMPP password is ''
$dbname = 'personaltraining_db';




//FOR LOCAL / DEVELOPING VERSION
/*$dbhost = 'localhost'; //XAMPP is 'localhost:3306'
$dbuser = 'phpuser';
$dbpwd = 'phpuser'; //XAMPP password is ''
$dbname = 'ampjam_db';*/
$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

