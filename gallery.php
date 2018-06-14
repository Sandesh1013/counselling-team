<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta property="og:description" content="Counselling Service IITJ. Checklist and forms for IIT Jodhpur. Ask any Query regarding admission at IIT Jodhpur and about Life at IIT Jodhpur" />
    <meta property="og:image" content="http://cs.iitj.ac.in/images/logo_og.jpg" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#D3D3D3">
    <meta name="theme-color" content="#D3D3D3">
    <meta name="description"
          content="Counselling Service IITJ. Checklist and forms for IIT Jodhpur. Ask any Query regarding admission at IIT Jodhpur and about Life at IIT Jodhpur">
    <meta name="robots" CONTENT="index, follow">
    <meta name="keywords"
          content="IITJ, IIT Jodhpur, Counselling Service, CS IITJ, CS, IIT, Jodhpur, Query, JEE Advance, Life in IITJ, Indian Institute of Technology Jodhpur"/>
    <title>Gallery - Counselling Service</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/compiled.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo.png">
</head>
<body>
<!--Navbar-->
<nav id="nav" class="navbar navbar-toggleable-md noscroll navbar-light fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" class="img-logo"><strong>Counselling Service</strong>
        </a>
        <div>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">CS Team</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="cs_team_ug.html">UG Team</a>
                            <a class="dropdown-item" href="cs_team_pg.html">PG Team</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Life @ IITJ</a>
                        <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="societies.html">Societies</a>
                            <a class="dropdown-item" href="committees.html">Committees</a>
                            <a class="dropdown-item" href="festivals.html">Festivals</a>

                            <a class="dropdown-item" target="_blank" href="http://spc.iitj.ac.in/">Career Development
                                Cell (Placement
                                Cell)</a>

                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Gallery<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
<div id="mdb-lightbox-ui"></div>
<div class="parallax">
    <!--First section-->
    <div id="section-1" class="parallax-section">

        <!--Parallax content-->
        <div class="parallax-layer parallax-layer-base">

            <!--Container to center the content-->
            <div class="full-bg-img flex-center">
                <ul style="padding-top: 2.5rem;">
                    <li>
                        <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">Gallery</h1>
                    </li>
                    <li>
                        <a class="btn btn-outline-white btn-lg wow fadeInLeft" href="#section-2" data-wow-delay="0.2s"><i
                                    class="fa fa-arrow-down left"></i> Scroll Down</a>
                        <a class="btn btn-outline-white btn-lg wow fadeInLeft" href="https://www.flickr.com/photos/134892933@N08/albums" target="_blank" data-wow-delay="0.2s"><i
                                    class="fa fa-flickr left"></i> Flickr</a>
                    </li>
                </ul>
            </div>
            <!--/Container to center the content-->

        </div>
        <!--/Parallax content-->

        <!--Parallax background-->
        <div class="parallax-layer parallax-layer-back">
        </div>
        <!--/Parallax background-->

    </div>
    <!--/First section-->
    <div id="section-2">
        <div class="container text-center pt-1 mb-1">

            <div class="row flex-center">
                <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel" role="tab">Ignus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pane2" role="tab">Spandan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pane3" role="tab">Varchas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pane4" role="tab">Misc</a>
                    </li>
                </ul>
                <div class="tab-content text-justify">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <?php
                                $dir_open = opendir('./images/gallery/ignus');

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='./images/gallery/ignus/$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"./images/gallery/ignus/$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pane2" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <?php
                                $dir_open = opendir('./images/gallery/spandan');

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='./images/gallery/spandan/$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"./images/gallery/spandan/$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pane3" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <?php
                                $dir_open = opendir('./images/gallery/varchas');

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='./images/gallery/varchas/$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"./images/gallery/varchas/$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pane4" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <?php
                                $dir_open = opendir('./images/gallery/misc');

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='./images/gallery/misc/$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"./images/gallery/misc/$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/compiled.min.js"></script>

        <script type="text/javascript" src="js/lazysizes.min.js"></script>

        <script>
            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });

            $('.dropdown-toggle').dropdown('toggle');
        </script>

        <!--Footer-->
        <footer class="page-footer center-on-small-only blue-grey darken-4">

            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                    <!--First column-->
                    <div class="col-md-5 offset-md-2">
                        <h5 class="title">CS - IITJ</h5>
                        <p>IIT Jodhpur Counselling Service team will be happy to help you anytime.</p>
                        <p>Join our freshers' forum:</p>
                        <a class="btn btn-lg btn-fb" role="button"
                           href="https://www.facebook.com/profile.php?id=534300236607966" target="_blank"><i
                                    class="fa fa-facebook left"></i> Freshers' Forum</a>
                    </div>
                    <!--/.First column-->

                    <hr class="hidden-md-up">

                    <!--Second column-->
                    <div class="col-md-3 offset-md-1">
                        <h5 class="title">Quick Links</h5>
                        <ul>
                            <li><a target="_blank" href="http://iitj.ac.in/">IIT Jodhpur</a></li>
                            <li><a target="_blank" href="http://students.iitj.ac.in/">Students' Gymkhana</a></li>
                            <li><a target="_blank" href="http://ignus.org/">Ignus</a></li>

                        </ul>
                    </div>
                    <!--/.Second column-->

                </div>
            </div>
            <!--/.Footer Links-->

            <hr>

            <!--Social buttons-->
            <div class="social-section">
                <ul>
                    <li><a target="_blank" class="btn-floating btn-small btn-fb"
                           href="https://www.facebook.com/CounsellingService.IITJodhpur/"><i
                                    class="fa fa-facebook"> </i></a>
                    </li>
                </ul>
            </div>
            <!--/.Social buttons-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: <a href="#">Counselling Service - IIT Jodhpur </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
    </div>
</div>
    <!--/.Footer-->
</body>
</html>
