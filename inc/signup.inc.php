<?php

include_once 'connect.inc.php';

if (isset($_POST['submit'])) {
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$age = $_POST['age'];
$country = $_POST['country'];
$short_message = $_POST['subject'];
$email = $_POST['email'];


$sql = "INSERT  INTO users (first_name, second_name, age, country, short_message, email) VALUES ('$first_name', '$last_name', '$age', '$country', '$short_message', '$email'); ";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
}