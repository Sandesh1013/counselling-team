<?php
include 'head.html';
?>

<head>
    <title>CS team - PG</title>
</head>

<body>
    <!--Navbar-->
    <?php
    include 'navbar.html';
    ?>
    <script>
        document.getElementById('nav-2').classList.add('active');
        document.getElementById('nav-2-1').classList.add('active');
        document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    </script>
    <div class="top-fixer-2"></div>
    <!--Section: Team v.1-->
    <section class="section team-section container">

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
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/ankitabhu"><i class="fa fa-facebook"> </i></a>

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
        <div class="row text-center" id="head">
            <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/piyali_biswas.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Piyali Biswas</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917278668078">+91-7278668078</a></h5>
                <h5><strong>Hometown: </strong>Kolkata, West Bengal<br><strong>Course: </strong>PhD <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:biswas.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/akhil_singh.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Akhil Singh</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918302083024">+91-8302083024</a></h5>
                <h5><strong>Hometown: </strong>Sonbhadra, Uttar Pradesh<br><strong>Course: </strong>PhD <strong>Branch: </strong>HSS</h5>
                <a class="icons-sm email-ic" href="mailto:singh.35@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/BMAkhil"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/blissomaniacc/"><i class="fa fa-instagram"> </i></a>
            </div>

        </div>
        <div class="divider-new">
            <h2 class="h2-responsive">Student Guides</h2>
        </div>
        <!--First row-->
        <div class="row text-center" id="student-guide">
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/patel_shreyas.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Patel Shreyas </h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918140121075">+91-8140121075</a></h5>
                <h5><strong>Hometown: </strong>Chikhli, Gujarat<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:patel.10@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sagar_vashisht.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sagar Vashisht</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917827540223">+91-7827540223</a></h5>
                <h5><strong>Hometown: </strong>Delhi<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:vashisht.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/sagar.vashisht.3"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/sagaro927/?hl=en"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/simran_chaudhary.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Simran Chaudhary</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918447007306">+91-8447007306</a></h5>
                <h5><strong>Hometown: </strong>Meerut, Uttar Pradesh<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:chaudhary.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100010833450264"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/_simran.chaudhary_/?hl=en"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/aman_srivastava.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Aman Srivastava</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919962938708">+91-9962938708</a></h5>
                <h5><strong>Hometown: </strong>Lucknow, Uttar Pradesh<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:srivastava.9@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/amansri1010"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/aman1010"><i class="fa fa-linkedin"> </i> </a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.quora.com/profile/Aman-Srivastava-68"><i class="fa fa-link"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/bhawna_chaubey.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Bhawna Chaubey </h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919718852846">+91-9718852846</a></h5>
                <h5></h5>
                <a class="icons-sm email-ic" href="mailto:chaubey.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/chaubeybhawna"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/bhawnachaubey/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/satya_pal.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Satya Pal</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918278687420">+91-8278687420</a></h5>
                <h5><strong>Hometown: </strong>Fatehpur Shekhawati, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>MEMS</h5>
                <a class="icons-sm email-ic" href="mailto:pal.4@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/kukusatya"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/palsatya858?igshid=sk0by3mdeqow"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/abhishek_mishra.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Abhishek Mishra</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917905612018">+91-7905612018</a></h5>
                <h5><strong>Hometown: </strong>Kanpur, Uttar Pradesh<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:mishra.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/Abhi.2426"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/abhiii_mishra/"><i class="fa fa-instagram"> </i></a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/abhishek-mishra-59735a128/"><i class="fa fa-linkedin"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sundar_dhara.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sundar Dhara</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919609093852">+91-9609093852</a></h5>
                <h5><strong>Hometown: </strong>Bardhaman, West Bengal<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:dhara.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/sundar.dhara3492?ref=bookmarks"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/sundar.dhara/"><i class="fa fa-instagram"> </i></a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/sundar-dhara-44a65017a/"><i class="fa fa-linkedin"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anshul_jain.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Anshul Jain</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919587522695">+91-9587522695</a></h5>
                <h5><strong>Hometown: </strong>Kota, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:jain.29@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/aj_anshul_jain_/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sheeba_malik.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sheeba Malik</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917838086310">+91-7838086310</a></h5>
                <h5><strong>Hometown: </strong>Delhi<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:malik.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/sheeba.malik1"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/sheeba.malik1/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sumitra_godara.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sumitra Godara</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918963011426">+91-8963011426</a></h5>
                <h5><strong>Hometown: </strong>Hanumangarh, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:godara.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/ananta_jain.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Ananta Jain</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918077332456">+91-8077332456</a></h5>
                <h5><strong>Hometown: </strong>Agra, Uttar Pradesh<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:jain.27@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anchal_gahlaut.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Anchal Gahlaut</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919521066150">+91-9521066150</a></h5>
                <h5><strong>Hometown: </strong>Jaspur, Uttarakhand<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:gahlaut.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/anchal.gahlaut"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/gahlautanchal/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/bhavna_yadav.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Bhavna Yadav </h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919549439922">+91-9549439922</a></h5>
                <h5><strong>Hometown: </strong>Gurugram, Haryana<br><strong>Course: </strong>PhD <strong>Branch: </strong>PH </h5>
                <a class="icons-sm email-ic" href="mailto:yadav.18@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/urvashi_verma.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Urvashi Verma </h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919927765352">+91-9927765352</a></h5>
                <h5><strong>Hometown: </strong>Ghaziabad, Uttar Pradesh<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>MTH</h5>
                <a class="icons-sm email-ic" href="mailto:verma.10@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.quora.com/profile/Urvashi-Verma-59"><i class="fa fa-link"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/amit_vishwakarma.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Amit Vishwakarma</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919930444118">+91-9930444118</a></h5>
                <h5><strong>Hometown: </strong>Mumbai, Maharashtra<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>MTH</h5>
                <a class="icons-sm email-ic" href="mailto:vishwakarma.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/amit.vishwakarma.7771586"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/_amitvis___/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sayan_bhattacherjee.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sayan Bhattacherjee</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918240961470">+91-8240961470</a></h5>
                <h5><strong>Hometown: </strong>Kolkata, West Bengal<br><strong>Course: </strong>PhD <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:bhattacherjee.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/priyanshu_raj_shrivastava.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Priyanshu Raj Shrivastava</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918602500319">+91-8602500319</a></h5>
                <h5><strong>Hometown: </strong>Indore, Madhya Pradesh<br><strong>Course: </strong>M.Tech. <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:shrivastava.5@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/priyu.raj"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/priyanshu_raj_shrivastava/"><i class="fa fa-instagram"> </i></a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/priyanshu-raj-shrivastava-874003b6/"><i class="fa fa-linkedin"> </i> </a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.quora.com/profile/Priyanshu-raj-Shrivastava-1"><i class="fa fa-link"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rajat_chaudhary.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Rajat Chaudhary</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918448543739">+91-8448543739</a></h5>
                <h5><strong>Hometown: </strong>Delhi<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>EE</h5>
                <a class="icons-sm email-ic" href="mailto:chaudhary.7@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/rajat-chaudhary-b08132139/"><i class="fa fa-linkedin"> </i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sandeep_yadav.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Sandeep Yadav</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918810642363">+91-8810642363</a></h5>
                <h5><strong>Hometown: </strong>Alwar, Rajasthan<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>EE</h5>
                <a class="icons-sm email-ic" href="mailto:yadav.16@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/raosandeep.yadav.3382"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/sandeep_yadav0099/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/vivek_raghuvanshi.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Vivek Raghuvanshi</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918982275771">+91-8982275771</a></h5>
                <h5><strong>Hometown: </strong>Pipariya, Madhya Pradesh<br><strong>Course: </strong>PhD <strong>Branch: </strong>EE</h5>
                <a class="icons-sm email-ic" href="mailto:raghuwanshi.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/vivek.raghuwanshi.96"><i class="fa fa-facebook"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/furkan_khan.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Furkan Khan </h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919999846607">+91-9999846607</a></h5>
                <h5><strong>Hometown: </strong>Muzzafarnagar, Uttar Pradesh<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:furkan.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/furkan.ahamadtyagi"><i class="fa fa-facebook"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/vipul_chauhan.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Vipul Chauhan</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919971179912">+91-9971179912</a></h5>
                <h5><strong>Hometown: </strong>Faridabad, Haryana<br><strong>Course: </strong>M Tech <strong>Branch: </strong>CSE</h5>
                <a class="icons-sm email-ic" href="mailto:chauhan.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/vipul.chauhan.562"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/vc13_10/"><i class="fa fa-instagram"> </i></a>
            </div>

        </div>
        <!--/First row-->

    </section>
    <!--/Section: Team v.1-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/compiled.min.js"></script>

    <script type="text/javascript" src="js/lazysizes.min.js"></script>
    <!--Footer-->
    <?php
    include 'footer.html';
    ?>