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
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-r">
            <h4 class="text-center">Monday to Friday</h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">MBM to Karwad</th>
                    <th scope="col">Karwad to MBM</th>
                </tr>
                </thead>
                <tbody  id="schedule"></tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-r">
            <h4 class="text-center">Saturday</h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">MBM to Karwad</th>
                    <th scope="col">Karwad to MBM</th>
                </tr>
                </thead>
                <tbody  id="scheduleSat"></tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-r">
            <h4 class="text-center">Sunday and Holidays</h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">MBM to Karwad</th>
                    <th scope="col">Karwad to MBM</th>
                </tr>
                </thead>
                <tbody  id="scheduleSun"></tbody>
            </table>
        </div>
    </div>
    <div class="btn btn-lg"><strong><a href="form/bus_schedule.pdf" download="Bus Schedule.pdf">Download Pdf Here</a></strong></div>
    <div class="btn btn-lg"><strong><a href="index.php">Back to Home</a></strong></div>

</section>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>
<script type="text/javascript" src="map/bus_schedule.js"></script>
<script>
    var table1 = document.getElementById('schedule');
    for (var i=0;i<Math.max(mbmToKarwad.length,karwadToMbm.length);i++){
        var row =table1.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = mbmToKarwad[i] || '--';
        cell2.innerHTML = karwadToMbm[i] || '--';
    }
    var table2 = document.getElementById('scheduleSat');
    for (var i=0;i<Math.max(mbmToKarwadSat.length,karwadToMbmSat.length);i++){
        var row =table2.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = mbmToKarwadSat[i] || '--';
        cell2.innerHTML = karwadToMbmSat[i] || '--';
    }
    var table3 = document.getElementById('scheduleSun');
    for (var i=0;i<Math.max(mbmToKarwadSun.length,karwadToMbmSun.length);i++){
        var row =table3.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = mbmToKarwadSun[i] || '--';
        cell2.innerHTML = karwadToMbmSun[i] || '--';
    }
</script>
<!--Footer-->
<?php
include 'footer.html';
?>