<?php

session_start();
header("Access-Control-Allow-Origin: *");
header("Cache-Control:public");
header("Content-Type: application/json");
header("Cache-Control:public; max-age:3431901");

include "DB.php";
$id = $_POST['id'];

//echo "<script>alert($id)</script>";
$sql = "SELECT * FROM `request` WHERE `id`=" .$id;
$request = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($request);

echo json_encode($row['description']);


    ?>