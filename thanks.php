<?php
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 14-05-2017
 * Time: 21:07
 */

require 'connection.php';
$conn = Connect();
function validData(){
    foreach ($_POST as $key => $value){
        if(!isset($key)) return false;
    }
    return true;
}

function redirect($url, $statusCode = 303)
{
    header("Refresh:7; url=$url", true, $statusCode);
    die();
}

if (validData()){
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subj = $conn->real_escape_string($_POST['subj']);
    $message = $conn->real_escape_string($_POST['message']);

    $query = "INSERT into responses (name,email,phone,subject,message) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $subj . "','" . $message . "')";
    $success = $conn->query($query);

    if (!$success) {
        die("Couldn't enter data: " . $conn->error);
    }
}

else {
    echo "No data posted";
    $conn->close();
    redirect('contact.html');
}

echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"theme-color\" content=\"#D3D3D3\">
    <title>Thanks</title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"css/font-awesome.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"css/mdb.min.css\" rel=\"stylesheet\">
</head>

<body>

    <!-- Start your project here-->
    <div style=\"height: 100vh\">
        <div class=\"flex-center flex-column text-center\">
            <h1 class=\"animated fadeIn mb-2\">Thank you for contacting us. We'll get back to you soon.</h1>

            <h5 class=\"animated fadeIn mb-1\">CS Team</h5>

            <p class=\"animated fadeIn text-muted\">This page will auto redirect shortly...</p>
        </div>
    </div>
</body>

</html>
";

$conn->close();
redirect('contact.html');