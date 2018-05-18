<?php
session_start();
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Contact Form - Responses</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="theme-color" content="#D3D3D3">
        <meta name="description"
              content="Counselling Service IITJ. Checklist and forms for IIT Jodhpur. Ask any Query regarding admission at IIT Jodhpur and about Life at IIT Jodhpur">
        <meta name="robots" CONTENT="index, follow">
        <meta name="keywords"
              content="IITJ, IIT Jodhpur, Counselling Service, CS IITJ, CS, IIT, Jodhpur, Query, JEE Advance, Life in IITJ, Indian Institute of Technology Jodhpur"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/compiled.min.css" rel="stylesheet">

        <link href="css/style2.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/logo.png">
    </head>
    <body>
<?php

$check = $_SESSION['bool'];
if ($check) {
    echo "<nav class=\"navbar navbar-toggleable-md navbar-light fixed-top\">
    <div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"images/logo.png\" class=\"img-logo\"><strong>Counselling Service</strong>
        </a>
        <div>
            <div class=\"navbar-collapse collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">CS Team</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"cs_team_ug.html\">UG Team</a>
                            <a class=\"dropdown-item\" href=\"cs_team_pg.html\">PG Team</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">Life @ IITJ</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"societies.html\">Societies</a>
                            <a class=\"dropdown-item\" href=\"committees.html\">Committees</a>
                            <a class=\"dropdown-item\" href=\"festivals.html\">Festivals</a>
                            <a class=\"dropdown-item\" target=\"_blank\" href=\"http://www.iitjecell.in/\">E-Cell</a>
                            <a class=\"dropdown-item\" target=\"_blank\" href=\"http://spc.iitj.ac.in/\">Career Development
                                Cell (Placement
                                Cell)</a>
                            <a class=\"dropdown-item\" href=\"parivartan.html\">Parivartan</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu3\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">FAQs</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"general.html\">General FAQs</a>
                            <a class=\"dropdown-item\" href=\"academics.html\">Academics</a>
                            <a class=\"dropdown-item\" href=\"cs.html\">Counselling Service</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"gallery.php\">Gallery</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"contact.html\">Contact Us</a>
                    </li>
                </ul>
                <div>
                    <a class=\"btn btn-primary btn-rounded btn-sm\" href=\"logout.php\" role=\"button\">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class=\"top-fixer-2 blue darken-2\" style=\"margin-top: 3.5rem;\">
    <div class=\"container top-fixer-2\">
    <h3 class=\"h3-responsive white-text vertical-center\">Responses</h3>
</div>
</div>
<div class=\"container\" style=\"margin-top: 2rem;\">
    ";
    require 'connection.php';
    $conn = Connect();
    $result = mysqli_query($conn, "SELECT * FROM responses ORDER BY id DESC");
echo "<div class=\"list-group\">
        ";
require 'HumanizePHP.php';
while ($row = mysqli_fetch_array($result)) {
    $dtime = strtotime($row['timestamp']);
    $normalized = HumanizePHP::naturaltime($dtime, $depth = 2);
    echo "<div class=\"list-group-item list-group-item-action flex-column align-items-start\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\"><strong>" . $row["name"] . "</strong></h5>
                <small>" . $normalized . "</small>
            </div>
            <div><i class=\"fa fa-phone left mr-2\"></i> <a href=\"tel:" . $row["phone"] . "\">" . $row["phone"] . "</a></div>
            <div><i class=\"fa fa-envelope-o left mr-2\"></i> <a href=\"mailto:" . $row["email"] . "\">" . $row["email"] . "</a></div><br>
            <p class=\"blue-text darken-5\"><strong>" . $row["subject"] . "</strong></p>
            <p class=\"mb-1 text-justify\">" . $row['message'] . "</p>
            <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\"></h5>
                <form method=\"post\" action=\"delete.php\" onsubmit=\"return confirm('Do you really want to delete this record?');\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\">
                    <button id=\"delete\" class=\"btn btn-floating btn-small red btn-fix\" name=\"submit\" type=\"submit\"><i class=\"fa fa-trash\" style=\"font-size: 1.5rem;\"></i></button>
                </form>
            </div>
        </div>
    ";
}
    echo "</div>
</div>";
    echo "
<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"js/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"js/tether.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"js/compiled.min.js\"></script>
<script>

</script>
<br>
<!--Footer-->
<footer class=\"page-footer center-on-small-only blue-grey darken-4\">

    <!--Footer Links-->
    <div class=\"container-fluid\">
        <div class=\"row\">

            <!--First column-->
            <div class=\"col-md-5 offset-md-2\">
                <h5 class=\"title\">CS - IITJ</h5>
                <p>IIT Jodhpur Counselling Services team will be happy to help you anytime.</p>
                <p>Join our freshers' forum:</p>
                <a class=\"btn btn-lg btn-fb\" role=\"button\"
                   href=\"https://www.facebook.com/profile.php?id=534300236607966\" target=\"_blank\"><i
                        class=\"fa fa-facebook left\"></i> Freshers' Forum</a>
            </div>
            <!--/.First column-->

            <hr class=\"hidden-md-up\">

            <!--Second column-->
            <div class=\"col-md-3 offset-md-1\">
                <h5 class=\"title\">Quick Links</h5>
                <ul>
                    <li><a target=\"_blank\" href=\"http://iitj.ac.in/\">IIT Jodhpur</a></li>
                    <li><a target=\"_blank\" href=\"http://students.iitj.ac.in/\">Students' Gymkhana</a></li>
                    <li><a target=\"_blank\" href=\"http://ignus.org/\">Ignus</a></li>
                    <li><a target=\"_blank\" href=\"http://www.iitjecell.in/\">E-Cell</a></li>
                </ul>
            </div>
            <!--/.Second column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class=\"social-section\">
        <ul>
            <li><a target=\"_blank\" class=\"btn-floating btn-small btn-fb\"
                   href=\"https://www.facebook.com/CounsellingService.IITJodhpur/\"><i class=\"fa fa-facebook\"> </i></a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2017 Copyright: <a href=\"#\">Counselling Service - IIT Jodhpur </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
} else {
    echo "<nav class=\"navbar navbar-toggleable-md noscroll navbar-light fixed-top\">
    <div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"images/logo.png\" style=\"height: 4.8vh; padding-right: 3%;\"><strong>Counselling Services</strong>
        </a>
        <div>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">CS Team</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"cs_team_ug.html\">UG Team</a>
                            <a class=\"dropdown-item\" href=\"cs_team_pg.html\">PG Team</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">Life @ IITJ</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"societies.html\">Societies</a>
                            <a class=\"dropdown-item\" href=\"committees.html\">Committees</a>
                            <a class=\"dropdown-item\" href=\"festivals.html\">Festivals</a>
                            <a class=\"dropdown-item\" target=\"_blank\" href=\"http://www.iitjecell.in/\">E-Cell</a>
                            <a class=\"dropdown-item\" target=\"_blank\" href=\"http://spc.iitj.ac.in/\">Career Development
                                Cell (Placement
                                Cell)</a>
                            <a class=\"dropdown-item\" href=\"parivartan.html\">Parivartan</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown btn-group\">
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu3\" data-toggle=\"dropdown\"
                           aria-haspopup=\"true\" aria-expanded=\"false\">FAQs</a>
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu1\">
                            <a class=\"dropdown-item\" href=\"general.html\">General FAQs</a>
                            <a class=\"dropdown-item\" href=\"academics.html\">Academics</a>
                            <a class=\"dropdown-item\" href=\"cs.html\">Counselling Service</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"gallery.php\">Gallery</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"contact.html\">Contact Us</a>
                    </li>
                </ul>
    </div>
        </div>
    </div>
</nav>
<div style=\"height: 100vh\">
        <div class=\"flex-center flex-column\">
            <h1 class=\"animated fadeIn mb-2\">Login Failed!</h1>

            <h5 class=\"animated fadeIn mb-1\">Please try again</h5>

            <p class=\"animated fadeIn text-muted\"><a href=\"login.html\"> Go Back...</a></p>
        </div>
    </div>
    </div>
</div>";
    echo "<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"js/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"js/tether.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"js/mdb.min.js\"></script>
<br>
<!--Footer-->
<footer class=\"page-footer center-on-small-only blue-grey darken-4\">

    <!--Footer Links-->
    <div class=\"container-fluid\">
        <div class=\"row\">

            <!--First column-->
            <div class=\"col-md-5 offset-md-2\">
                <h5 class=\"title\">CS - IITJ</h5>
                <p>IIT Jodhpur Counselling Services team will be happy to help you anytime.</p>
                <p>Join our freshers' forum:</p>
                <a class=\"btn btn-lg btn-fb\" role=\"button\"
                   href=\"https://www.facebook.com/profile.php?id=534300236607966\" target=\"_blank\"><i
                        class=\"fa fa-facebook left\"></i> Freshers' Forum</a>
            </div>
            <!--/.First column-->

            <hr class=\"hidden-md-up\">

            <!--Second column-->
            <div class=\"col-md-3 offset-md-1\">
                <h5 class=\"title\">Quick Links</h5>
                <ul>
                    <li><a target=\"_blank\" href=\"http://iitj.ac.in/\">IIT Jodhpur</a></li>
                    <li><a target=\"_blank\" href=\"http://students.iitj.ac.in/\">Students' Gymkhana</a></li>
                    <li><a target=\"_blank\" href=\"http://ignus.org/\">Ignus</a></li>
                    <li><a target=\"_blank\" href=\"http://www.iitjecell.in/\">E-Cell</a></li>
                </ul>
            </div>
            <!--/.Second column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class=\"social-section\">
        <ul>
            <li><a target=\"_blank\" class=\"btn-floating btn-small btn-fb\"
                   href=\"https://www.facebook.com/CounsellingService.IITJodhpur/\"><i class=\"fa fa-facebook\"> </i></a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2017 Copyright: <a href=\"#\">Counselling Service - IIT Jodhpur </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
}
echo "
</body>
</html>
";
?>
