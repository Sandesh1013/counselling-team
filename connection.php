<?php
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 14-05-2017
 * Time: 21:18
 */

function Connect()
{
    $dbhost = "172.16.100.161";
    $dbuser = "ignus";
    $dbpass = "r00t@ignus17";
    $dbname = "ignus";

    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

    return $conn;
}
