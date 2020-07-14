<?php

include_once 'connect.inc.php';

if (isset($_POST['submit'])) {
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$age = $_POST['age'];


$sql = "INSERT  INTO users (first_name, second_name, age) VALUES ('$first_name', '$last_name', '$age'); ";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
}