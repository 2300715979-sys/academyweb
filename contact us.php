<?php
require("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gid Academy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- <nav>
        <a href="INDEX.HTML">HOME</a>
        <a href="about us.html">ABOUT US</a>
        <a href="contact us.html">CONTACT US</a>
       </nav>  -->
       <header>
        <div class="jjj">
            <h3>Gid Academy</h3>
        </div>
        <nav>
            <a href="index.php">Logout</a>
        <a href="signup.php">Register</a>
                <a href="home.php">Home</a>
              <a href="about us.php">About Us</a>
              <a href="contact us.php">Contact us</a>
             
            
        </nav>
      
        <!-- Social Media Icons & Search -->
        <div class="icons">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="search-icon"><i class="fas fa-search"></i></a>
        </div>
      </header>
      <section class="heross"><br><br><br><br>
        <h1>Please Contact Us</h1>
        <p>We are open/online 24/7 and ready to welcome you</p>
    </section>
    <!-- <div class="wat">
      <a href="https://wa.me/+256 700785764" class="whatsapp-float" target="_blank"> 
        <img src="image/hhhhhh.png" alt="WhatsApp">  -->
   </a>
    <section class="contact-section">
        <h2 class="section-title">Contact For Any Query</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Come To Us</h3>
                <p>Feel free to reach out to us with any questions, comments, or concerns. We’re here to help!</p>
                <div class="info-item">
                    <strong>Office</strong>
                    <p>kataza, nakawa, bunyonyidrive, Kampala, Uganda</p>
                </div>
                <div class="info-item">
                    <strong>Mobile</strong>
                    <p>+256 763860855</p>
                </div>
                <div class="info-item">
                    <strong>Email</strong>
                    <p>blairambasitse@gmail.com</p>
                </div>
            </div>
            <div class="map-and-form">
                <iframe
                 src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAP_IFRAME_CODE_HERE">
                </iframe>
            
                <form action="contlogic.php"class="contact-form" method="POST">
                    <input type="text" placeholder="Your Name" required name="user">
                    <input type="email" placeholder="Your Email" required name="emai">
                    <input type="text" placeholder="Subject" required name="sub">
                    <textarea placeholder="Message" required name="mess"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <button class="scroll-up-btn">↑</button>  
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <!-- <h3>Company</h3>  -->
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQs & Help</a></li>
                </ul>
            </div>
    
            <div class="footer-section">
                <h3>Contact</h3>
                <p>nakawa, Kampala, Uganda</p>
                <p>+256 763860855</p>
                <p>blairambasitse@gmail.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section">
              <h3>Gallery</h3>
              <div class="gallery">
                  <img src="1.jpg" alt="Gallery Image">
                  <img src="image/2.jpg" alt="Gallery Image">
                  <img src="image/3.jpg" alt="Gallery Image">
                  <img src="image/4.jpg" alt="Gallery Image">
                  <img src="image/5.jpg" alt="">
                  <img src="image/21.jpg" alt="">
              </div>
          </div>
    
          <div class="footer-section">
              <h3>Get in touch</h3>
              <p>Reach out at our head offices in Nakawa Kampala Uganda <br>P.O.Box 123 kampala</p>
              <a href="#"></a><button class="profile-btn">View Profile</button>
          </div>
      </div>
      
    
      <div class="footer-bottom">
          <p>&copy;2025 Tonny blair, All Rights Reserved.</p>
      </div>
    </footer>
    <script src="main.js"></script>
   </body>
</html>