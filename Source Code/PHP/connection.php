<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'fandom_userdata';

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die('Failed to connect!');
}