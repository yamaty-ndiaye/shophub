<?php
$connexion = mysqli_connect("localhost", "root", "", "projet");
mysqli_set_charset($connexion,"utf8");
if (mysqli_connect_errno()) {
    echo "Echec de la connexion: " . mysqli_connect_error();
    exit();
}