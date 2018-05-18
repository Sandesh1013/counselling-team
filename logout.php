<?php
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 15-05-2017
 * Time: 02:09
 */
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location: login.html"); //to redirect back to "index.php" after logging out
exit();