<?php

// We then check if the user has clicked the signup button
if (isset($_POST['submit'])) {

    //Then we include the database connection
    include_once 'dbh.inc.php';
    // And we get the data from the signup form
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $beoordeling = $_POST['beoordeling'];
    

    //Check if inputs are empty
    if (empty($naam) || empty($achternaam) || empty($email) || empty($review) || empty($beoordeling)) {
        header("Location: ../index.php?signup=empty");
        exit();
    } else {
        //Check if input characters are valid 
        if (!preg_match("/^[\sa-zA-Z]*$/", $naam) || !preg_match("/^[\sa-zA-Z]*$/", $achternaam)) {
            header("Location: ../index.php?signup=char");
            exit();
            //Check of email is valid    
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?signup=email&naam=$naam&achternaam=$achternaam");
            exit();
        } else {
            include 'review.inc.php';
            header("Location: ../index.php?signup=success");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}