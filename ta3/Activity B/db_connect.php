<?php

$conn = mysqli_connect("localhost", "root", "", "activity_b");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>