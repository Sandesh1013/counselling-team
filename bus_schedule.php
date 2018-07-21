<?php
    include 'head.html';
?>
<head>
    <title>Bus Schedule - IITJ</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-1').classList.add('active');
    document.getElementById('nav-1').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<section class="section team-section container">
    <h1 class="section-heading">Bus Schedule</h1>
    <div class="row m-4 m-lg-5">
        <p>
        A help desk will be there on the <b>Platform No. 1 on Jodhpur Jn.(Railway Station).</b> The buses will be
        arranged from the MBM Engineering College to IIT Jodhpur Permanent Campus(Karwar) via Railway Station on 22nd
        July 2018. For the availability of buses on other days i.e. 23rd and 24th July, you may contact the following -
        <br>
        <ul>
            <li>Gautam Batulla - <a href="tel:+919588810985">+91-9588810985</a></li>
            <li>Arjun Joshi - <a href="tel:+919871698289">+91-9871698289</a></li>
            <li>Shaunak Mehta - <a href="tel:+919619142312">+91-9619142312</a></li>
            <li>Arpit Singh - <a href="tel:+918788082907">+91-8788082907</a></li>
            <li>Ashish Chavan - <a href="tel: +918766443560">+91-8766443560</a></li>
            <li>Sourav Yadav - <a href="tel:+919079990298">+91-9079990298</a></li>
        </ul>
        </p>
    </div>
    <div class="btn btn-lg"><strong><a href="index.php">Back to Home</a></strong></div>

</section>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>