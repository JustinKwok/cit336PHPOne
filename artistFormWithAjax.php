<?php

$link = mysqli_connect("localhost", "root", "root", "favoriteSong");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_GET['firstname']);
$last_name = mysqli_real_escape_string($link, $_GET['lastname']);
$fav_song = mysqli_real_escape_string($link, $_GET['favsong']);

$sql = "INSERT INTO favoritesong (firstName, lastName, song) VALUES ('$first_name', '$last_name', '$fav_song')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>