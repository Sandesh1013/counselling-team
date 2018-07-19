<?php
include 'head.html';
?>
    <head>
        <title>Forms and documents</title>
    </head>
    <body>
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-7').classList.add('active');
    document.getElementById('nav-7').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<siv class="section container">
    <div class="section-heading m-0 mb-2">Forms and Documents</div>
    <div class="section-description">
        <div class="text-justify card" role="list">
            <h3 class="h3-responsive card-header"><strong>Forms List</strong></h3>
            <ol class="card-block pl-5">
                <li><a href="form/Admissions%20WelcomeLetter.pdf" download="Welcome Letter.pdf">Welcome Letter</a></li>
                <li><a href="form/Medical%20Forms.pdf" download="Medical Forms.pdf">Medical Forms (M1 - M8)</a></li>
                <li><a href="form/Income%20Certificate%20Format.pdf" download="Income Certificates.pdf">Income Proofs</sub></a>
                </li>
            </ol>
            <div style="color: red;" class="ml-3 mr-3 mb-1  ">Note: Medical forms should be filled by a registered medical practitioner</div>
        </div>
        <div class="text-justify card mt-2" role="list">
            <h3 class="h3-responsive card-header"><strong>Documents needed to be brought</strong></h3>
            <ol class="card-block pl-5">
                <li>Proof of payment</li>
                <li>Income Certificate (For signing authorities <a href="form/Income%20Certificate%20Format.pdf"
                                                                   download="Income Certificate Issuing Authorities.pdf">click here</a>)</li>
                <li>Course Allotment Letter from JOSAA</li>
                <li>Admit Card of JEE (Advanced) 2018</li>
                <li>Mark Sheet of Class XII</li>
                <li>Passing Certificate</li>
                <li>School Leaving/Transfer Certificate (as applicable)</li>
                <li>Class X (High School) Board Certificate or any other Certificate as proof of Date of Birth</li>
                <li>Character Certificate from last attended school/college</li>
                <li>Valid Certificate of Category in the prescribed format (in case of OBC (NCL), SC,
                    ST, PwD and DS students only) issued by a Competent Authority</li>
                <li>Mark sheet of class 10</li>
                <li>Family Income Certificate (as per Form I, I1, I2 and I3)</li>
                <li>Medical Reports (M1 - M8)</li>
                <li>Six Passport size photographs</li>
            </ol>
        </div>
        <div class="card text-justify mt-2">
            <h3 class="h3-responsive card-header"><strong>Check List</strong></h3>
            <ol class="card-block pl-5">
                <li>Rope</li>
                <li>Extension board</li>
                <li>Insect repellent</li>
                <li>Scientific calculator</li>
                <li>Umbrella</li>
                <li>Sports shoes</li>
                <li>Hangers and clips</li>
                <li>Water bottle</li>
                <li>Torch</li>
                <li>Bed sheet and pillow cover</li>
                <li><strong>OPEN MIND!</strong></li>
            </ol>
        </div>
        <div class="btn btn-lg mt-2" style="float: left;"><a href="index.php">Back to home</a></div>
    </div>
</siv>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<?php
include 'footer.html';
?>
