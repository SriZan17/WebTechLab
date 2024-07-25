<?php

$server = "localhost";

$user = "root";

$password = "";

$db = "sms_30077";



$conn = mysqli_connect($server, $user, $password, $db);



if ($conn) {

    echo "Okay";
} else {

    echo "Issue";
}
