<?php

$servename = "35.169.210.169";
$DBuname = "root";
$DBPass = "Hanna31961!";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
}

