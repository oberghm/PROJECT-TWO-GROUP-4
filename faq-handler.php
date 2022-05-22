<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>molcurphotos</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- nav bar -->
    <section class="sub-header">
        <nav>
            <a href="index.html">molcurphotos</a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="personalwork.html">PERSONAL WORK</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="FAQs.html">FAQs</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="partnership.html">PARTNERSHIPS</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>   
            <h1>FAQs</h1>
 <!-- Questions -->
    </section>
        <section class="faq-container">
            <div class="faq-one">
                <h2 class="faq-page">How do I book a session?</h2>
                <div class="faq-body">
                    <p>Contact me on my contact form, email or Instagram. We'll discuss details and plan a day! When booking, I take payment 3-5 days before our session. I'll also confirm the day/time of our session a few days prior so there's no confusion.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <h2 class="faq-page">What are your rates?</h2>
                <div class="faq-body">
                    <p>Each session is different in it's own way. Depending on the type of session, concept, location, need of studio and so on. Once I'm contacted, I'll send a quote based off of what you're looking for!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <h2 class="faq-page">Can I buy more photos after I recieve the edits?</h2>
                <div class="faq-body">
                    <p>Absolutely! After I send your photos back from our session, if you're interested in buying more just let me know.
                        I do archive photos 2-4 weeks after sending photos back so I'll have to know shortly after.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-four">
                <h2 class="faq-page">How long until I get my photos back?</h2>
                <div class="faq-body">
                    <p>Depending on the session and concept, it can take from one week to six weeks. I want to provide you with the best results, the wait time will be worth it!
                        Each photographer is different. If you're used to other photographers sending work in a couple days, please don't expect that from all other photographers! I will communicate through out the process so you're not left wondering where your photos are.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-five">
                <h2 class="faq-page">Do you do collaborations?</h2>
                <div class="faq-body">
                    <p>I have a group of models I've been working with for quite a while, if I have a certain concept in mind, I'll reach out to someone. I only consider collaborations based on the interest of creating something specific or building my portfolio.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-six">
                <h2 class="faq-page">What if I need to reschedule?</h2>
                <div class="faq-body">
                    <p>Sessions can be rescheduled due to weather or illness. A 48-hour notice is appreciated and we can reschedule based on each others availability.
                        There is a cancelation fee if cancelled 24 hours or less of session.</p>
                </div>
            </div>
                <hr class="hr-line">
            <div class="faq-seven">
                <h2 class="faq-page">Do you do videography?</h2>
                <div class="faq-body">
                    <p>I do not but hopefully one day! If you're needing video done, I can definitely recommend some talented videographers!</p>
                </div>
            </div>
                <hr class="hr-line">
            <div class="faq-eight">
                <h2 class="faq-page">What kind of gear do you use?</h2>
                <div class="faq-body">
                    <p>I use a Sony A7RII full frame mirrorless camera with a variety of lenses!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-nine">
                <h2 class="faq-page">Do you send back RAW files?</h2>
                <div class="faq-body">
                    <p>I shoot and edit every session in RAW to ensure the maximum amount of exposure and color but I deliver edited photos in high resolution JPEG files and do not include RAW files with my packages.
                        If you are interested in having the RAW files, they are available with an additional fee and agreement.</p>
                </div>
            </div>
        </section>
        <section>
        <div class="comment-box">
            <h3>Ask a question!</h3>
            <form class="comment-form" method="post" action="faq-handler.php">
                <input type="text" name="subject" placeholder="Subject">
                <textarea rows="8" name="question" placeholder="Question"></textarea>
                <input type="submit" name="submit" class="hero-btn red-btn">
            </form>
        </div>
        </section>

        <!-- footer -->
        <section class="footer">
            <a href="about.html" class="hero-btn red-btn">Book Now</a>
                <div class="icons">
                    <a href="https://www.facebook.com/molcurphotos/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/molcurphotos" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/molcurphotos/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    
                </div>
                <a href="https://www.instagram.com/molcurphotos/?hl=en" target="_blank" class="footer-link"><p>made with <i class="fa fa-heart-o"></i> by Hallie Oberg, Justin, and Spencer</p></a>
        </section> 
        <!----JavaScript for toggle menu---->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
        navLinks.style.right = "-200px";
        }
        </script> 
      
</body>
</html>

<?php

    require_once('sql_conn.php');


    // get the post records
    if(isset($_POST['submit'])){        
        $subject = $_POST['subject'];
        $question = $_POST['question'];
    
    
    // database insert SQL code
        $query= "INSERT INTO tbl_faq (subject, question) VALUES ('$subject', '$question')";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
    
        echo "<p align='center'> Thank you for your submission, I will be in contact with you shortly!<p>";
    
    }
?>