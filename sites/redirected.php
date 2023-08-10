<?php
session_start();

echo "Hi, my name is {$_GET["name"]}, i am {$_GET["age"]} years old. 
My email address is: {$_GET["email"]}. Today i am staying at: 
{$_COOKIE["location_today"]}. Message to the world: {$_SESSION["message"]}.
The hostname of this page: {$_SERVER["HTTP_HOST"]}, you came here on port: 
{$_SERVER["SERVER_PORT"]}.";

session_destroy();
