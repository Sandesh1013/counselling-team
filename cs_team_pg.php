<?php
    include 'head.html';
?>
<head>
    <title>CS team - UG</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    var teamType = "PG";
    document.getElementById('nav-2').classList.add('active');
    document.getElementById('nav-2-1').classList.add('active');
    document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2">

</div>
<!--Section: Team v.1-->
<section class="section team-section container">
    <select class="form-control" style="position: absolute;width: 20%;right: 0%;" id = "year-select">
    <option>sel</option>
    <option value="2017">2017</option>
    </select>
    <!--Section heading-->
    <h1 class="section-heading">Our Team</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row text-center">

        <!--First column-->
        <div class="col-lg-12 col-md-12 mb-r">

            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/ankitasharma.png" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Ankita Sharma</h4>
            <h5>Faculty Advisor</h5>

            <a class="icons-sm email-ic" href="mailto:ankitasharma@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/ankitabhu"><i
                    class="fa fa-facebook"> </i></a>

        </div>
        <div class="col-lg-12 col-md-12 mb-r animate-profile invisible">

            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/prasad_gadkari.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Prasad Gadkari</h4>
            <h5>Student Counselor</h5>
            <h5><strong>Contact : </strong>+91 98223 55796</h5>
            <a class="icons-sm email-ic" href="mailto:studentcounsellor@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/abhilasha_chouhan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Abhilasha Chouhan</h4>
            <h5>Well Being Moderator</h5>
            <h5><strong>Contact : </strong>+91 72328 23131</h5>
            <a class="icons-sm email-ic" href="mailto:abhilasha@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/krishna_singh_bhandari.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Krishna Singh Bhandari</h4>
            <h5>Well Being Moderator</h5>
            <h5><strong>Contact : </strong>+91 80056 51419</h5>
            <a class="icons-sm email-ic" href="mailto:krishnasingh@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
    </div>

    <div class="divider-new">
        <h2 class="h2-responsive">Student Heads</h2>
    </div>
    <div class="row text-center" id = "head">
        
    </div>

    <div class="divider-new">
        <h2 class="h2-responsive">Student Assistant Heads</h2>
    </div>
    <div class="row text-center" id = "assistant-head">
        
    </div>
    
    <div class="divider-new">
        <h2 class="h2-responsive">Student Guides</h2>
    </div>
    <div class="row text-center" id="student-guide">
        
    </div>

</section>
<!--/Section: Team v.1-->


<!-- SCRIPTS -->
<!-- JQuery -->

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/getTeamData.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>

<script type="text/javascript" src="js/lazysizes.min.js"></script>

<script>
    $("#year-select").on("change", function() {
        var year=document.getElementById("year-select").value;
        getTeam(year, teamType)
    });
</script>        
<!--Footer-->
<?php
include 'footer.html';
?>
<?php
    include 'head.html';
?>