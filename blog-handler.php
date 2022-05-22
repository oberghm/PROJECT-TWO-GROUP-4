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
            <h1>Blog Posts</h1>
    </section>
    
<!---------- Blog Page ---------->
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <h1>The Last Shoot of 2021</h1>
        <h3>~ December 7th, 2021 ~</h3>
        <p> I got the opportunity to work with Bola before the end of the year, we decided to shoot at a studio last minute. With only shooting for 30 minutes, she did amazing!</p>
        <div class="imagesblog1">
        <img id="imagesblog" src="images/blog-home.jpg" alt="blog Home">
        <img id="imagesblog"   src="images/blog-img2.jpeg" alt="blog image 2">
        <img id= "imagesblog" src="images/blog-img3.jpeg" alt="blog image 3">
        </div>
    
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form" name="frmComment" method="post" action="blog-handler.php">
                    <input type="text" name="name" placeholder="Enter Name">
                    <input type="text" name="email" placeholder="Enter email">
                    <textarea rows="5" name="comment" placeholder="Your Comment"></textarea>
                    <input type="submit" name="submit" class="hero-btn red-btn">
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
        
            <h3>All Blog Posts</h3>
            <div>
                <a href="blog1.html"><span>My First Photoshoot</span></a>
                <span>07/17/19</span>
            </div>
            <div>
                <a href="blog2.html"><span>Landscapes on a Foggy Day</span></a>
                <span>01/05/21</span>
            </div>
            <div>
                <a href="blog3.html"><span>Engagement Session in the Mountains</span></a>
                <span>09/05/21</span>
            </div>
            <div>
                <a href="blog.html"><span>Last Shoot of 2021</span></a>
                <span>12/07/21</span>
            </div>
        </div> 
    
    </div>
    </section>
    
<!-------- footer ---------->

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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
    
    
    // database insert SQL code
        $query= "INSERT INTO tbl_blog (name, email, comment) VALUES ('$name', '$email', '$comment')";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
    
        echo "<p align='center'> Thank you for your submission, I will be in contact with you shortly!<p>";

    }

?>