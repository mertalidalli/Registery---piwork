<?php

$db = new PDO("mysql:host=localhost;dbname=dbase;charset=utf8", "root", "");


$username = $_POST['username'];
$email = $_POST['email'];
$enabled = $_POST['enabled'];

if(!$username || !$email || !$enabled ) {
   die("Please do not leave any blank spaces.");
}

$add = $db->prepare("INSERT INTO dbase SET username = ?, email = ?, enabled = ? ");
$add->execute([$username, $email, $enabled]);

if ($add){
   echo "User information has been saved.";
}else{
   echo "Something went wrong.";
}



?>