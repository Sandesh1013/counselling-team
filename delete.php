<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 25-05-2017
 * Time: 20:47
 */
require 'connection.php';
$conn = Connect();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function validData(){
    foreach ($_POST as $key => $value){
        if(!isset($key)) return false;
    }
    return true;
}

if (validData()){

    $sql = "DELETE FROM responses WHERE id={$_POST['id']} LIMIT 1";
    $success = $conn->query($sql);

    if ($success) {
        $conn->close();
        header("Location:view.php", true, 303);
    }
    else echo "Failed to delete record!";
}
?>