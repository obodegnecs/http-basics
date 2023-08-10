<?php
session_start();

$_SESSION["message"] = "This is a message";

setcookie("location_today", "Bekes", time() + 86400, "/");

$data = array(
    'name' => 'Csenge Dobo',
    'age' => '26',
    'email' => 'csengedobo@gmail.com',
);

echo http_build_query($data);

header("Location: redirected.php?" . http_build_query($data));

die();