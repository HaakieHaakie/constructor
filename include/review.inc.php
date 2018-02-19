<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reviewdehersteltrainer";

$conn = new mysqli($servername, $username, $password, $dbname);
//return $conn;

$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$review = $_POST['review'];
$beoordeling = $_POST['beoordeling'];

$sql = "INSERT INTO `reviews`(`naam`, `achternaam`, `email`, `review`, `beoordeling`) VALUES ('$naam','$achternaam','$email','$review', '$beoordeling');";
mysqli_query($conn, $sql);
header("location: ../index.php?signup=success");



