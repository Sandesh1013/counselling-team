<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:description" content="Counselling Service IITJ. Checklist and forms for IIT Jodhpur. Ask any Query regarding admission at IIT Jodhpur and about Life at IIT Jodhpur" />
    <meta property="og:image" content="http://cs.iitj.ac.in/images/logo_og.jpg" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#D3D3D3">
    <title>Forms - IIT Jodhpur</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">

</head>
<body>
<div style="height: 100vh">
    <div class="container">
      <div class="row flex-center">
            <div class="col-sm-10">
                <!--Card Primary-->
                <div class="card primary-color z-depth-1-half text-center mt-4 mb-2">
                    <div class="card-block text-center">
                        <h2 class="h2-responsive mb-0 text-white">Forms/Documents</h2>
                    </div>
                </div>
                <!--/.Card Primary-->
            </div>
        </div>
        <div class="row">
          <div class="col-12 p-2 mt-2">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="text-center">S.No</th>
                    <th>File Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                                $dir_open = opendir('./form/docs');
                                $i = 0;
                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $i++;
                                        $link = "<tr>
                    <td class=\"text-center\">$i</td>
                    <td>$filename</td>
                    <td class=\"text-center\"><a href='./form/docs/$filename' data-toggle=\"tooltip\" data-placement=\"left\"
                            title=\"Download\"><i class=\"fa fa-download fa-2x\"></i></a></td>
                </tr>
                    ";
                                        echo $link;
                                    }
                                }
                                closedir($dir_open);
                                ?>
                </tbody>
            </table>
          </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

</body>
</html>
