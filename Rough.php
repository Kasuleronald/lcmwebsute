<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lifechangers Movement Ministry</title>
  <!-- Add FontAwesome for the phone icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" type="image/png" href="logo.png">
  <style>
    /* General Reset */
    
    html {
  scroll-behavior: smooth;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #1A1933; /* Navbar background color */
      color: #fff;
      position: relative;
      z-index: 1000; /* Ensure navbar stays on top */
    }

    .logo img {
      height: 60px; /* Increased logo height */
      width: auto; /* Maintain aspect ratio */
    }

    .menu {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu > li {
      position: relative;
    }

    .menu > li > a {
      display: block;
      padding: 15px 20px;
      color: #fff;
      text-decoration: none;
    }

    .menu > li:hover > a {
      background-color: rgba(255, 255, 255, 0.1); /* Light hover effect */
    }

    .submenu {
  display: block; /* Always block for transitions */
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #323148;
  list-style: none;
  padding: 5px 0;
  margin: 0;
  min-width: 200px;
  border-radius: 8px;
  overflow: hidden;
  opacity: 0; /* Start fully transparent */
  visibility: hidden; /* Start hidden */
  z-index: 1001;
  transition: opacity 0.3s ease, visibility 0.3s ease; /* Smooth transition */
}

.menu > li:hover .submenu {
  opacity: 0.9; /* Fade in to 90% opacity */
  visibility: visible; /* Make visible */
}
.submenu {
  transition: opacity 0.3s ease, visibility 0.3s ease;
  transition-delay: 0.1s; /* Delay before hiding */
}

.menu > li:hover .submenu {
  transition-delay: 0s; /* No delay when showing */
}
@media only screen and (max-width: 768px) {
  .submenu {
    position: static;
    background-color: rgba(0, 0, 0, 0.2);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
  }

  .submenu.active {
    opacity: 1;
    visibility: visible;
  }
}

    .submenu li a {
      display: block;
      padding: 10px 20px;
      color: #fff;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .submenu li a:hover {
      background-color: #313048;
      border-radius: 4px;
    }

    .menu > li:hover .submenu {
      display: block;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .donate-button {
      padding: 8px 16px;
      background-color:#ff5733;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-weight: bold; /* Make the text bold */
    }

    .donate-button:hover {
      background-color: #e64a19;
    }

    .phone-contact {
      display: flex;
      align-items: center;
      gap: 10px; /* Space between icon and phone number */
      font-size: 16px; /* Adjust font size */
      color: #fff; /* Text color */
    }

    .phone-contact i {
      font-size: 24px; /* Icon size */
      color: #fff; /* Icon color */
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .phone-contact:hover i {
      color: #ff5733; /* Change icon color on hover */
    }

    /* Hamburger Menu Styles */
    .hamburger {
      display: none; /* Hidden by default */
      font-size: 24px;
      cursor: pointer;
      color: #fff;
    }

    /* Responsive Styles */
    @media only screen and (max-width: 768px) {
      .hamburger {
        display: block; /* Show hamburger menu on mobile */
      }

      .menu {
        display: none; /* Hide the menu by default on mobile */
        flex-direction: column;
        width: 100%;
        background-color: #444;
        position: absolute;
        top: 60px; /* Adjust based on navbar height */
        left: 0;
      }

      .menu.active {
        display: flex; /* Show the menu when active */
      }

      .menu > li {
        width: 100%;
      }

      .submenu {
        position: absolute;
        background-color: #313048;
        border-radius: 0; /* Remove rounded corners for mobile */
      }
    }

    /* H1 Section Styles */
    .h1-section {
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
      width: 100%; /* Full width */
    }

    .h1-section h1 {
      font-size: 36px;
      color: #333;
      margin: 0;
    }

    /* Node Slide Styles */
    .node-slide {
      position: relative;
      width: 100%;
      height: 400px; /* Adjust height as needed */
      background-image: url('canvas.png');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      border-radius: 10px; /* Rounded corners */
      overflow: hidden; /* Ensure rounded corners are visible */
      margin: 10px; /* Added margin */
    }

    .node-slide .content {
      display: flex;
      align-items: center;
      gap: 20px; /* Space between image and text */
    }

    .node-slide .image-column img {
      height: auto; /* Set image height */
      width: 100%; /* Maintain aspect ratio */
      opacity: 0.9; /* Set opacity to 90% */
      max-width: 100%;
      border-radius: 10px; /* Optional: Add rounded corners to the image */
    }

    .node-slide .text {
      background-color: rgba(0, 0, 0, 0.59); /* Semi-transparent background for text */
      padding: 60px;
      border-radius: 10px;
      max-width: 680px; /* Limit text width for better readability */
      
    }

    .node-slide h2 {
      font-size: 30px; /* Font size for "Isaiah 40:31 (Amp)" */
      margin: 0;
      color: #fff; /* Ensure brightness is 100% */
    }

    .node-slide p {
      font-size: 20px; /* Font size for the verse */
      margin: 10px 0 0;
      font-style: italic;
      color: #fff; /* Ensure brightness is 100% */
      line-height: 1.6; /* Improve readability */
    }
    .node-slide p2 {
      line-height: calc(5px);

    }

    /* Three Columns Section */
    .three-columns {
      display: flex;
      justify-content: space-between;
      padding: 40px 20px;
      border-radius: 10px; /* Rounded corners */
      background-color: #f4f4f4; /* Light background for the section */
      max-width: 1200px; /* Limit width for better readability */
      margin-left: auto;
      margin-right: auto;
      
    }

    .column {
      flex: 1;
      margin: 0 10px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      transition: transform 0.3s ease; /* Smooth zoom effect */
    }

    .column:hover {
      transform: scale(1.05); /* Zoom effect on hover */
    }

    .column img {
      width: 100%;
      height: 300px; /* Increased image height */
      object-fit: cover; /* Ensure images cover the area */
    }

    .column h3 {
      font-size: 24px;
      margin: 20px 0 10px;
      color: #333;
    }

    .column p {
      font-size: 16px;
      color: #666;
      padding: 0 20px;
    }

    .column button {
      margin: 20px;
      padding: 10px 20px;
      background-color:rgb(0, 43, 124);
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .column button:hover {
      background-color:rgb(0, 15, 100); /* Darken button on hover */
    }

    /* Responsive Styles for Three Columns */
    @media only screen and (max-width: 768px) {
      .three-columns {
        flex-direction: column;
      }

      .column {
        margin: 10px 0;
      }
    }

    /* Who We Are Section */
    .who-we-are {
      padding: 20px 10px;
      background-color: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      text-align: center;
      border-radius: 10px; /* Rounded corners */
      max-width: 1200px; /* Limit width for better readability */
      margin-left: auto;
      margin-right: auto;
    
    }

    .who-we-are h2 {
      font-size: 36px;
      color: #333;
      margin-bottom: 5px;
    }

    .who-we-are p {
      font-size: 18px;
      font-style: italic;
      color: #666;
      max-width: 1200px;
      margin-bottom: 15px;
      margin-left: auto;
      margin-right: auto;
      line-height: 1.6;
    }

    /* Prayer Section */
    .prayer-section {
      padding: 40px 20px;
      background-color: #eeeeee;
      text-align: center;
      border-radius: 10px; /* Rounded corners */
      margin: 20px; /* Added margin */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      max-width: 1200px; /* Limit width for better readability */
      margin-left: auto;
      margin-right: auto;
    }

    .prayer-section form {
  max-width: 600px;
  margin: 20px auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.prayer-section input, .prayer-section textarea {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

.prayer-section textarea {
  height: 150px;
  resize: vertical;
}

.prayer-section button {
  padding: 10px 20px;
  background-color:#002b7b;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.prayer-section button:hover {
  background-color:rgb(0, 15, 100);
}

    .prayer-section h2 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    .prayer-section p {
      font-size: 18px;
      color: #666;
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.6;
    }

    footer {
  background-color: #1A1933;
  color: #fff;
  padding: 40px 20px; /* Increased padding */
  text-align: center;
  margin-top: 40px;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
}

.footer-links {
  list-style: none;
  padding: 0;
  margin: 20px 0; /* Adjusted margin */
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap; /* Allow links to wrap on smaller screens */
}

.footer-links a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
  font-size: 16px; /* Slightly larger font size */
}

.footer-links a:hover {
  color: #ff5733;
}

/* Social Media Icons */
.social-media {
  margin-top: 20px;
}

.social-media a {
  color: #fff;
  font-size: 24px;
  margin: 0 10px;
  transition: color 0.3s ease;
}

.social-media a:hover {
  color: #ff5733;
}

/* Back-to-Top Button in Footer */
.back-to-top-footer {
  margin-top: 20px;
}

.back-to-top-footer button {
  padding: 10px 20px;
  background-color: #ff5733;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.back-to-top-footer button:hover {
  background-color: #e64a19;
}

/* Responsive Styles */
@media only screen and (max-width: 768px) {
  .footer-links {
    flex-direction: column; /* Stack links vertically on mobile */
    gap: 10px;
  }

  .footer-links a {
    font-size: 14px; /* Smaller font size for mobile */
  }

  .social-media a {
    font-size: 20px; /* Smaller icons for mobile */
  }
}


  </style>

</head>








<body>
  <!-- Navbar -->
  <div class="navbar">
    <!-- Logo -->
    <div class="logo">
      <img src="logo.png" alt="LCM LOGO">
    </div>

    <!-- Menu -->
    <ul class="menu" id="menu">
      <li>
        <a href="#">Home</a>
        
      </li>
      <li>
        <a href="#">About US</a>
        <ul class="submenu">
          <li><a href="#">Our Background</a></li>
          <li><a href="#">Vision and Mission</a></li>
          <li><a href="#">Our Message</a></li>
          <li><a href="#">Our Beliefs</a></li>
          <li><a href="#">The Pastral Team</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Ministry</a>
        <ul class="submenu">
          <li><a href="#">Sunday Service</a></li>
          <li><a href="#">Evangelism</a></li>
          <li><a href="#">SCampus Ministry</a></li>
          <li><a href="#">Schools Ministry</a></li>
          <li><a href="#">Revival and Worship</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Resources</a>
        <ul class="submenu">
          <li><a href="#">Sermons</a></li>
          <li><a href="#">Prayer</a></li>
          <li><a href="#">Salvation</a></li>
          <li><a href="#">Testimonies</a></li>
          <li><a href="#">Weekly Programs</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Partnership</a>
        
      </li>
      <li>
        <a href="#">Contact Us</a>
        
      </li>
    </ul>

    <!-- Header Right (Donate Button and Phone Contact) -->
    <div class="header-right">
      <button class="donate-button">GIVE</button> <!-- Changed text to "GIVE" -->
      <div class="phone-contact">
        <i class="fas fa-phone"></i> <!-- FontAwesome phone icon -->
        <span>+256 741 036095</span> <!-- Phone number -->
      </div>
    </div>

    <!-- Hamburger Menu (Mobile Only) -->
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
  </div>

  <!-- H1 Section -->
  <div class="h1-section">
    <h1>Welcome to Lifechangers Movement Ministry</h1>
  </div>

  <!-- Node Slide -->
  <div class="node-slide">
    <div class="content">
      <!-- Image Column (Moved to the left) -->
      <div class="image-column">
        <img src="eagle-year.png" alt="Eagle Year">
      </div>

      <!-- Text Column -->
      <div class="text">
        <h2>Isaiah 40:31 (Amp)</h2>
        <p>
          But those who wait for the Lord [who expect, look for, and hope in Him]
          Will gain new strength and renew their power;
          They will lift up their wings [and rise up close to God] like eagles [rising toward the sun];
          They will run and not become weary,
          They will walk and not grow tired.
        </p>
        <p2>_______________________________</p2>
      </div>

      <div class="image-column">
        <img src="papa2.png" alt="Ap. Ambrose Twongyeirwe">
      </div>

    </div>
  </div>

  <!-- Three Columns Section -->
  <div class="three-columns">
    <!-- Column 1 -->
    <div class="column">
      <img src="Eagle.jpg" alt="Fying Eagle">
      <h3>The Year of the Eagles</h3>
      <p>The Bible has much to say about the mighty eagle: And understanding its way in the air and the mystery of this majestic flying bird, shows us how to live supernaturally. The way of an eagle in the air... is among the four things which are too wonderful for men. (Proverbs 30:18)
      Through this God’s remarkable crea...</p>
      <button>Read Article</button>
    </div>

    <!-- Column 2 -->
    <div class="column">
      <img src="papa3.png" alt="APOSTLE">
      <h3>The Move of the Spirit</h3>
      <h4>The Power and Purpose of Pentecost</h4>
      <p>The word Pentecost literally means “50th or 50th day.” For Jews, Pentecost was the time when they celebrated the first harvest of the agricultural year. It was a time when they gave thanks to God for what the land had produced and for what their labor had yielded.
For Christians, Pente...
</p>
      <button>Read Article</button>
    </div>

    <!-- Column 3 -->
    <div class="column">
      <img src="Workshop.png" alt="Workshop">
      <h3>Undistracted Devotion to God</h3>
      <p2>What could be distracting you from a consistent life of devotion to God our Father</p2>
      <p>and the walk of the Spirit? Beloved, the wisdom of the Spirit declares in Hebrews 11:15Amp that "If they had been thinking with [homesick] remembrance of that country from which they were emigrants, they would have found constant opportunity to...</p>
      
      <button>Read Article</button>
    </div>
  </div>

  <!-- Who We Are Section -->
  <div class="who-we-are">
    <h2>Who We Are</h2>
    <p>
      The LCM ministry team members, called the Lifechangers, are a special breed raised up by God for an end-time, divine purpose of reaching the world in our generation at any cost with the wisdom and lifesaving gospel. The Lifechangers, besides student members, consist of professionals—men and women personally inspired to fulfil the mandate of LCM. Our members meet regularly for equipping them to live purpose-driven lives, fellowship, and bonding for life-changing ministry to the youth in schools, universities, higher learning institutions, campuses, and beyond.
    </p>
  </div>


  <div class="video-sermons-section">


  <div class="text-column">
    <h2>Weekly Message</h2>
    <h3>The Secret of High Flyers</h3>
    <p>Date: 2nd February 2025</p>
    <p2>Author: Ap. Ambrose Twongyeirwe</p2>
    <p id="devotional-text">
      Protect Your Love For Him: Having known and believed the love that God has for us, we are calling to abide in love and so abide in God, and God in us (1 John 4:16). In Romans 5:5, we are assured, “And hope maketh not ashamed; because the love of God is shed abroad in our hearts by the Holy Ghost which is given unto us.” This divine love, imparted to us through the Holy Spirit, is a precious gift that requires our vigilant protection. In Revelation 2:25, Jesus instructs us, “But that which ye have already hold fast till I come.” This directive underscores the necessity of guarding the love we’ve received from God. Just as God’s love fills our hearts, it’s essential to safeguard it diligently to prevent its loss.
      <span id="more-text" style="display: none;">
        The call to guard our hearts with all diligence (Prov 4:23) is rooted in the reality that His love can be lost if not adequately protected. This principle is exemplified in various aspects of Christian life. For instance, individuals who receive healing may, due to neglect, sin, or disbelief, find their healing diminished or lost. Therefore the importance of remaining steadfast in the Word can not be ever underestimated [Col3:16, Prov 4:20-22, Psalms 119:9-11]. As Jesus stated in John 14:15, “If ye love me, keep my commandments.” Our daily actions should reflect our love for God by adhering to His teachings and maintaining our faith. Each day offers opportunities to live out His Word, affirm our faith, and express the significance of Jesus in our lives.
      </span>
    </p>
    <button id="read-more-btn" onclick="toggleText()">Read More</button>

    <div class="devotional-navigation">
        <button onclick="previousDevotional()">← Previous Week</button>
        <button onclick="nextDevotional()">Following Week →</button>
    </div>





  </div>


  




  <div class="video-column">

    <h2>Sermons</h2>
    <div class="video-grid">
      <iframe width="853" height="480" src="https://www.youtube.com/embed/_0rFvAOO5g4" title="The New Creation Service -  The Indwelling of the Holy Spirit" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/r6x6dHeV5fw" title="The New Creation Service -  The Importance of Understanding Righteousness" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/stUdminGcgw" title="NEW CREATION SUNDAY SERVICE  WITH  AP. DR. JOHN UDOH  | September to Remember" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/Fnz8sVeHbxs" title="The Dominion Mandate | Ap. Ambrose Twongyeirwe | 15.10.2023 New Creation Service" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/d07_SY2CQyk" title="NIGHT OF IMPARTATION &amp; TAKE OFF WITH AP. AMBROSE &amp;  AP. DR. JOHN UDOH  | September to Remember" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/stUdminGcgw" title="NEW CREATION SUNDAY SERVICE  WITH  AP. DR. JOHN UDOH  | September to Remember" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      
      
      
      
        <!-- Add more iframes as needed -->
    </div>
  </div>
</div>


<style>
.video-sermons-section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 20px;
  background-color: #f9f9f9;
  margin: 20px 0;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  
}

.text-column {
  flex: 1;
  padding-right: 20px;
}

.video-column {
  flex: 2;
}

.video-column h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.video-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.video-grid iframe {
  flex: 1 1 calc(50% - 20px); /* Two columns with space between */
  width: 100%;
  height: 208px;
}

.text-column h2 {
  font-size: 36px;
  margin-bottom: 10px;
  color: #333;
}

.text-column h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.text-column p {
  font-size: 18px;
  text-align: justify;
  margin-bottom: 10px;
}

.text-column p2 {
  font-size: 18px;
  text-align: justify;
  margin-bottom: 10px;
  font-style: italic;
  font-weight: bold;
  color: rgb(1, 46, 129);

}

#read-more-btn {
  background-color:rgb(0, 43, 124);
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

#read-more-btn:hover {
  background-color:rgb(0, 14, 100);
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
  .video-sermons-section {
    flex-direction: column;
  }

  .text-column, .video-column {
    flex: 1;
    width: 100%;
    padding-right: 0;
  }

  .video-grid iframe {
    flex: 1 1 100%; /* Full width on smaller screens */
    height: 260px;
  }
}

.devotional-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }





</style>


<script>
function toggleText() {
  var moreText = document.getElementById("more-text");
  var btnText = document.getElementById("read-more-btn");

  if (moreText.style.display === "none") {
    moreText.style.display = "inline";
    btnText.textContent = "Show Less";
  } else {
    moreText.style.display = "none";
    btnText.textContent = "Read More";
  }
}
</script>






  <!-- Prayer Section -->
  <div class="prayer-section">
  <h2>DO YOU NEED PRAYER?</h2>
  <p>
    Prayer changes everything — spiritually, physically, financially, and in every other way — and our prayer team is ready to join their faith with yours.
  </p>
  <form id="prayer-form">
    <input type="text" id="name" name="name" placeholder="Your Name" required>
    <input type="email" id="email" name="email" placeholder="Your Email" required>
    <textarea id="prayer-request" name="prayer-request" placeholder="Your Prayer Request" required></textarea>
    <button type="submit">Submit Prayer Request</button>
  </form>
</div>

  
  

  <script>
    function toggleMenu() {
      const menu = document.getElementById('menu');
      menu.classList.toggle('active');
    }
  </script>


<section id="easter-camp">
  <div class="camp-container">
    <div class="image-column">
      <img src="camp.jpg" alt="Easter Camp">
    </div>

    <div class="camp-details">
      <h2>CHOSEN GENERATION EASTER CAMP 2025</h2>
      <p>Dates: 18th April to 21st April 2025</p>
    </div>

    <div class="register-container">
      <a href="https://forms.google.com" class="register-button" target="_blank">Register Now</a>
      <p> Or fill the form below to Register</p>
    </div>
  </div>
</section>

<style>#easter-camp {
  padding: 20px;
  background-color: #f9f9f9;
  margin: 20px 0;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.camp-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.image-column {
  flex: 1;
  text-align: center;
}

.image-column img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

.camp-details {
  flex: 1;
  text-align: left;
  margin-left: 20px;
  padding: 21px;
}

.camp-details h2 {
  font-size: 28px;
  margin-bottom: 10px;
}

.camp-details p {
  font-size: 18px;
  margin-bottom: 20px;
}

.register-container {
  flex: 1;
  text-align: center;
}

.register-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: rgb(0, 43, 124);
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.register-button:hover {
  background-color: rgb(0, 15, 100);
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
  .camp-container {
    flex-direction: column;
    align-items: flex-start;
  }

  .image-column, .camp-details, .register-container {
    flex: 1;
    width: 100%;
    text-align: center;
    margin-left: 0;
    padding: 21px;
  }

  .image-column img {
    width: 100%;
  }
}
</style>

<!-- Other content -->

<div class="form-container">
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSedrXgk_6hmKO1veFr94OITYgd2oS6uWdjWLLYy-3LoTxq-WQ/viewform?embedded=true" width="640" height="1873" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</div>

<style>
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background-color: #f9f9f9;
  margin: 20px 0;
}

.form-container iframe {
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  max-width: 1200px;
  height: 573px;
}
</style>


</body>

<footer>

<!-- Back-to-Top Button -->
    <div class="back-to-top-footer">
      <button onclick="scrollToTop()">Back to Top</button>

    </div>


  <div class="footer-content">
    
    <ul class="footer-links">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <!-- Social Media Icons -->
    <div class="social-media">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" aria-label="X (formerly Twitter)"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    </div>
    <p>&copy; 2025 Lifechangers Movement Ministry. All rights reserved.</p>
  </div>

<!-- JavaScript for Scroll to Top -->
<script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scrolling
            });
        }

        // Add a button for scrolling to the top
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '↑';
        backToTopButton.className = 'back-to-top';
        document.body.appendChild(backToTopButton);

        backToTopButton.addEventListener('click', scrollToTop);

        // Show/hide button based on scroll position
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
    </script>
    <script>
    // Back-to-Top Function
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scrolling
      });
    }

    // Mobile Navbar Toggle Function
    function toggleMenu() {
      const menu = document.getElementById('menu');
      const overlay = document.getElementById('overlay');
      const closeBtn = document.querySelector('.close-btn');

      menu.classList.toggle('active');
      overlay.classList.toggle('active');
      closeBtn.classList.toggle('active');
    }

    // Handle Submenu Dropdowns on Mobile
    document.querySelectorAll('.menu > li').forEach(item => {
      const arrow = item.querySelector('.dropdown-arrow');
      if (arrow) {
        item.addEventListener('click', function(e) {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            const submenu = this.querySelector('.submenu');
            submenu.classList.toggle('active'); // Toggle active class
            arrow.classList.toggle('active'); // Rotate arrow
          }
        });
      }
    });
  </script>




</footer>

</html>