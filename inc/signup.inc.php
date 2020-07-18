<?php

include_once 'connect.inc.php';

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $short_message = mysqli_real_escape_string($conn, $_POST['subject']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "INSERT  INTO users (first_name, second_name, age, country, short_message, email) VALUES ('$first_name', '$last_name', '$age', '$country', '$short_message', '$email'); ";
    $result = mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=success");
}