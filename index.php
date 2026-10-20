<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>eLearning</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
  <button class="navbar-toggler" id="navbar-toggler">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-menu" id="navbar-menu">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#course">Course</a></li>
      <li><a href="#community">Community</a></li>
      <li><a href="#events">Events</a></li>
      <li><a href="#contact">Contact Us</a></li>
      <li><a href="login.php">Login</a></li> 
    </ul>
  </div>
</nav>
<script>
  // Handle navbar toggle for small screens
  $("#navbar-toggler").click(function() {
    $("#navbar-menu").toggleClass("active");
  });

  // Smooth scrolling
  $(document).ready(function() {
    $("a[href^='#']").on('click', function(event) {
      var target = this.hash;
      var $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing');
      event.preventDefault();
    });
  });
</script>

<!-- Home -->
<section id="home">
  <div class="home-content">
    <h1>Welcome to Skillhub</h1>
    <div class="btn">
      <a class="btn-one" href="#features">Learn more</a>
      <a class="btn-two" href="#course">Explore Courses</a>
    </div>
  </div>
</section>

  <!-- Features -->
  <section id="features">
    <h1>Discover Our Awesome Features</h1>
    <p>Explore the top features that make our e-learning platform stand out. From scholarships to global certifications, we have everything to enhance your learning experience!</p>
    <div class="feature-base">

      <!-- Feature 1: Scholarship Facility -->
      <div class="feature-box">
        <i class="fa-solid fa-graduation-cap"></i>
        <h3>Scholarship Facility</h3>
        <p>
          We offer scholarship opportunities for talented and deserving students to help make learning more accessible and affordable.
        </p>
      </div>
  
      <!-- Feature 2: Online Courses -->
      <div class="feature-box">
        <i class="fa-solid fa-laptop-code"></i>
        <h3>Online Courses and certicate</h3>
        <p>
          Access a wide variety of online courses across multiple subjects, ranging from beginner to advanced levels, taught by expert instructors.
        </p>
      </div>
  
   <!-- Feature 3: Career Support & Guidance -->
<div class="feature-box">
  <i class="fa-solid fa-user-tie"></i>
  <h3>Career Support & Guidance</h3>
  <p>
    Receive personalized career support, mentorship, and guidance to help you navigate your professional journey and achieve your career goals.
  </p>
</div>
  </section>

  <!-- Course Section -->
<section class="course-section" id="course">
  <h1>Our Popular Courses</h1>
  <p>Unlock your future with the most in-demand skills. Enroll now and become a tech leader of tomorrow!</p>

  <div class="course-grid">
    
    <div class="course-card">
      <img src="Images/web devlopment (2).jpg" alt="Web Dev" class="course-img">
      <div class="course-title">Web Development for Beginners</div>
      <div class="course-price">₹499</div>
      <div class="course-duration">Duration: 6 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Web Development for Beginners')">Enroll</button></a>

    </div>

    <div class="course-card">
      <img src="Images/DATA SCIENC.jpeg" alt="Data Science" class="course-img">
      <div class="course-title">Data Science with Python</div>
      <div class="course-price">₹699</div>
      <div class="course-duration">Duration: 6 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php">><button class="enroll-btn" onclick="redirectToRegistration('Data Science with Python')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Cybersecurity.jpeg" alt="Cybersecurity" class="course-img">
      <div class="course-title">Foundation of Cybersecurity</div>
      <div class="course-price">₹999</div>
      <div class="course-duration">Duration: 8 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Foundation of Cybersecurity')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/mastering java.jpeg" alt="Java OOP" class="course-img">
      <div class="course-title">Mastering OOP with Java</div>
      <div class="course-price">₹599</div>
      <div class="course-duration">Duration: 6 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Mastering OOP with Java')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Mobile app devlopment .jpg" alt="Flutter App" class="course-img">
      <div class="course-title">Mobile App Development with Flutter</div>
      <div class="course-price">₹799</div>
      <div class="course-duration">Duration: 8 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Mobile App Development with Flutter')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Introduction to AI.jpg" alt="AI & ML" class="course-img">
      <div class="course-title">Introduction to Artificial Intelligence</div>
      <div class="course-price">₹899</div>
      <div class="course-duration">Duration: 12 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Introduction to Artificial Intelligence')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Machine learning with python.jpeg" alt="Generative AI" class="course-img">
      <div class="course-title">Machine Learning with Python: A Beginners Guide</div>
      <div class="course-price">₹1,199</div>
      <div class="course-duration">Duration: 6 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Machine Learning with Python: A Beginners Guide')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/cloud.jpg" alt="Cloud Computing" class="course-img">
      <div class="course-title">Cloud Computing (AWS & Azure)</div>
      <div class="course-price">₹1,099</div>
      <div class="course-duration">Duration: 8 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Cloud Computing (AWS & Azure)')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="https://img.freepik.com/free-vector/blockchain-technology-security-template-vector-data-payment-securing-blog-banner_53876-112174.jpg?ga=GA1.1.408550652.1746882386&semt=ais_hybrid&w=740" alt="Blockchain" class="course-img">
      <div class="course-title">Blockchain Technology</div>
      <div class="course-price">₹849</div>
      <div class="course-duration">Duration: 4 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Blockchain Technology')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Devops.jpg" alt="DevOps" class="course-img">
      <div class="course-title">DevOps with Docker & Kubernetes</div>
      <div class="course-price">₹1,299</div>
      <div class="course-duration">Duration: 8 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('DevOps with Docker & Kubernetes')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="Images/Internet of Things.jpg" alt="IoT" class="course-img">
      <div class="course-title">Introduction to Internet of Things</div>
      <div class="course-price">₹849</div>
      <div class="course-duration">Duration: 6 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐☆</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('Introduction to Internet of Things')">Enroll</button></a>
    </div>

    <div class="course-card">
      <img src="images/SQL.jpg" alt="SQL Mastery" class="course-img">
      <div class="course-title">SQL for Everyone: Zero to Mastery</div>
      <div class="course-price">₹1,299</div>
      <div class="course-duration">Duration: 12 Weeks</div>
      <div class="course-rating">⭐⭐⭐⭐⭐</div>
      <a href="enroll.php"><button class="enroll-btn" onclick="redirectToRegistration('SQL for Everyone: Zero to Mastery')">Enroll</button></a>
    </div>
  </div>
</section>

 <!-- community -->
<section id="community">
  <h1>Community Experts</h1>
  <p>This section introduces some of our top community experts from different domains.</p>

  <h2>Meet Our Experts</h2>
  <p>We have professionals from various fields to guide and support learners.</p>

  <div class="expert-box">
    <div class="profile">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="profile image" />
      <h3>Anonymous One</h3>
      <h4>Cybersecurity Expert</h4>
      <p>"Skilled in network security, threat detection, encryption, and vulnerability assessment techniques."</p>
      <div class="social">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
    </div>

    <div class="profile">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="profile image" />
      <h3>Anonymous Two</h3>
      <h4>AI/ML Expert</h4>
      <p>"Experienced in artificial intelligence, deep learning, and machine learning algorithms"</p>
      <div class="social">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
    </div>

    <div class="profile">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="profile image" />
      <h3>Anonymous Three</h3>
      <h4>Web Development Expert</h4>
      <p>"Experienced in front-end, back-end, responsive web development, and database integration"</p>
      <div class="social">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
    </div>

    <div class="profile">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="profile image" />
      <h3>Anonymous Four</h3>
      <h4>Cloud Computing Expert</h4>
      <p>"Proficient in cloud infrastructure, DevOps, scalability solutions, and cloud security practices."</p>
      <div class="social">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
    </div>
  </div>
</section>

<!-- Event Section -->
<section id="events">
  <h1>Upcoming Events</h1>
  <p>Join our latest tech workshops and grow your skills with experts.</p>

  <div class="event-box">

    <div class="event-card">
      <img src="https://media.licdn.com/dms/image/v2/D4E12AQHmt2HavWsIoQ/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1697380698315?e=2147483647&v=beta&t=eBTgOHI4XcavXC-3v_H83FU18rJtEzYm-q08a8eBHWY" alt="AI Workshop" class="event-img">
      <div class="event-title">Generative AI Workshop</div>
      <div class="event-date">Date: July 15, 2025</div>
      <div class="event-desc">Explore AI models like ChatGPT and DALL·E with hands-on demos.</div>
      <a href="register.php?event=Generative%20AI%20Workshop"><button class="event-btn" onclick="showPopup('You have registered for Generative AI Workshop!')">Register</button></a>

    </div>

    <div class="event-card">
      <img src="https://i.pinimg.com/736x/d7/89/14/d789144d5c7d7a3d5cbd3b2bf35afd9d.jpg" alt="Cloud Bootcamp" class="event-img">
      <div class="event-title">Cloud Computing Bootcamp</div>
      <div class="event-date">Date: July 20, 2025</div>
      <div class="event-desc">Learn about AWS, Azure, and Google Cloud in one intensive week.</div>
      <a href="register.php?event=Cloud%20Computing%20Bootcamp"><button class="event-btn" onclick="showPopup('You have registered for Cloud Computing Bootcamp!')">Register</button></a>
    </div>

    <div class="event-card">
      <img src="https://i.pinimg.com/736x/62/94/7f/62947faee557748ad6bfd922357b1531.jpg" alt="UI/UX Workshop" class="event-img">
      <div class="event-title">UI/UX Design Workshop</div>
      <div class="event-date">Date: August 5, 2025</div>
      <div class="event-desc">Get started with Figma and user-centric design practices.</div>
      <a href="register.php?event=UI/UX%20Design%20Workshop"><button class="event-btn" onclick="showPopup('You have registered for UI/UX Design Workshop!')">Register</button></a>
    </div>

    <div class="event-card">
      <img src="https://i.pinimg.com/736x/74/96/0e/74960ea29d5bbbd663b574c818debe6a.jpg" alt="Blockchain Meetup" class="event-img">
      <div class="event-title">Blockchain & Crypto Meetup</div>
      <div class="event-date">Date: August 18, 2025</div>
      <div class="event-desc">Learn blockchain fundamentals and the future of decentralized tech.</div>
     <a href="register.php?event=Blockchain%20%26%20Cryptomeetup"><button class="event-btn" onclick="showPopup('You have registered for Blockchain & Crypto Meetup!')">Register</button></a>

    </div>

  </div>
</section>

<!-- JavaScript -->
<script>
  function redirectToRegistration(courseName) {
    window.location.href = `registration.php?course=${encodeURIComponent(courseName)}`;
  }
</script>

<section id="contact">
  <h1>Contact Us</h1>
  <p>We're here to assist you with any questions or concerns. Reach out to us!</p>

  <div class="contact-box">
    <div class="contact-image">
      <img src="https://img.freepik.com/free-vector/flat-design-illustration-customer-support_23-2148887720.jpg?w=996" alt="contact us" />
    </div>

    <div class="form">
      <h3>Let us help</h3>
      <form id="contactForm" 
            action="https://formspree.io/f/YOUR_FORMSPREE_ENDPOINT" 
            method="POST"> 
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name" />

        <label for="email">Email</label>
        <input type="email" id="email" name="_replyto" required placeholder="Enter your email" />
        
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="_subject" required placeholder="Regarding an event inquiry..." />

        <label for="message">Message</label>
        <textarea id="message" name="message" required placeholder="Enter your message"></textarea>

        <div class="send-btn">
          <button type="submit">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- footer -->
 <footer>
  <div class="footer-container">
    <!-- eLearning Section -->
    <div class="footer-col">
      <h3>eLearning</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#features">Feature</a></li>
        <li><a href="#course">Courses</a></li>
        <li><a href="#community">Community</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </div>

    <!-- popular courses Section -->
    <div class="footer-col">
      <h3>Popular courses</h3>
      <ul>
        <li><a href="#course">Web Development</a></li>
        <li><a href="#course">App Development</a></li>
        <li><a href="#course">Data Science</a></li>
        <li><a href="#course">Cloud Computing</a></li>
      </ul>
    </div>

    <!-- Follow Us Section -->
    <div class="footer-col">
      <h3>Follow us</h3>
      <ul>
        <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
        <li><a href="https://www.github.com" target="_blank">GitHub</a></li>
      </ul>
    </div>

    <!-- Newsletter Section -->
    <div class="footer-col">
      <h3>Newsletter</h3>
      <p>Stay updated with the latest courses and news.</p>
      <div class="subscribe">
        <input type="email" placeholder="Your Email Address" />
        <a href="#" class="subscribe-btn">Subscribe</a>
      </div>
    </div>
<!-- image credit  section -->
 <section class="image-credits">
  <h2>Image Sources</h2>
  <div class="image-credits-row">
    <div class="image-source">
      <a href="https://www.freepik.com" target="_blank">Freepik</a>
    </div>
    <div class="image-source">
      <a href="https://www.unsplash.com" target="_blank">Unsplash</a>
    </div>
    <div class="image-source">
      <a href="https://www.pinterest.com" target="_blank">Pinterest</a>
    </div>
  </div>

</section>

  <!-- Copyright Section -->
  <div class="copyright">
    <p>Copyright ©2025 All rights reserved | This template is made by Skillhub</p>
    <div class="social">
      <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="https://www.github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
    </div>
  </div>
</footer>
</body>
</html>