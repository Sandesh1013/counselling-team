<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Ajat Prabha
 * Date: 14-05-2017
 * Time: 22:41
 */

require 'connection.php';
$conn = Connect();
$count = 0;

if (isset($_POST['user']) and isset($_POST['pass'])) {
    $search = mysqli_query($conn, "SELECT username, password FROM users WHERE username='" . $_POST['user'] . "' AND password='" . $_POST['pass'] . "'") or die("Error in Search");
    $count = mysqli_num_rows($search);
}

if ($count == 1) {
    $check = true;
    $_SESSION['bool'] = $check;
    $_SESSION['password'] = $_POST['pass'];
    header("location: view.php", true, 303);
} else {
    $msg = "<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Login failed</title>
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
        <div class=\"flex-center flex-column\">
            <h1 class=\"animated fadeIn mb-2\">Login Failed!</h1>

            <h5 class=\"animated fadeIn mb-1\">Please try again</h5>

            <p class=\"animated fadeIn text-muted\"><a href=\"login.html\"> Go Back...</a></p>
        </div>
    </div>
</body>
</html>
";
    echo $msg;
    $conn->close();
}
