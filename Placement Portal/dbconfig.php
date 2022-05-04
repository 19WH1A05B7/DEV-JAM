<?php

$conn = mysqli_connect("127.0.0.1:3306", "root", "", "portal");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



