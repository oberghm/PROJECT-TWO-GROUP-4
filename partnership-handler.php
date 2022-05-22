<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>molcurphotos</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="partnership.html">PARTNERSHIPS</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>   
            <h1>Partnership Requests</h1>
    </section>
    
    
<!------- Contact me ------->
    
    <section class="contact-me">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>molcur9284@gmail.com</h5>
                            <p>Please enter your partnership requests to the right.</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form name="frmBook" method="post" action="partnership-handler.php">
                    <input type="text" name="fldName" placeholder="Enter your name" required>
                    <input type="text" name="fldEmail" placeholder="Enter email address" required>
                    <input type="text" name="fldPhone" placeholder="Enter your phone number" required>
                    <input type="text" name="fldType" placeholder="Enter the type of professional work you do" required>
                    <input type="text" name="fldAccounts" placeholder="Enter your professional accounts/handles" required>
                    <textarea rows="8" name="fldMessage" placeholder="Please describe why you believe a partnership will be beneficial for both of us." required></textarea>
                    <input type="submit" name="submit" class="hero-btn red-btn"></input>
                    </form> 
                </div>
            </div>
    </section>
    
    
<!-------- footer ---------->

<section class="footer">
        <div class="icons">
            <a href="https://www.facebook.com/molcurphotos/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/molcurphotos"target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/molcurphotos/?hl=en"target="_blank"><i class="fa fa-instagram"></i></a>
            
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
    $fldName = $_POST['fldName'];
    $fldEmail = $_POST['fldEmail'];
    $fldPhone = $_POST['fldPhone'];
    $fldType = $_POST['fldType'];
    $fldAccounts = $_POST['fldAccounts'];
    $fldMessage = $_POST['fldMessage'];


// database insert SQL code
    $query= "INSERT INTO tbl_partnership (fldName, fldEmail, fldPhone, fldType, fldAccounts, fldMessage) VALUES ('$fldName', '$fldEmail', '$fldPhone', '$fldType','$fldAccounts', '$fldMessage')";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    echo "<p align='center'> Thank you for your submission, I will be in contact with you shortly!<p>";

}

?>
