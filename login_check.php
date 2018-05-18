<?php
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 27-05-2017
 * Time: 08:47 PM
 */

session_start();
require 'connection.php';
$conn = Connect();
function redirect($location) {
    header("Location: $location");
}

if(isset($_SESSION['password'])){
    echo "isset";
    $password = $_SESSION['password'];
    $search = mysqli_query($conn, "SELECT password FROM users WHERE password='" . $password . "'") or die("Error in Search");
    $count = mysqli_num_rows($search);
    if($count == 1){
        header("Location: view.php", true, 303);
    }
}
else{
    redirect("login.html");
}