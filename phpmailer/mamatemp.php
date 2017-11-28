<?php
if(isset($_SESSION['bilal'])){
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
phpAlert(   "Thank you!\\nYour response has been recorded"   ); 
session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bbb.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
  <style>
 
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

  .v {
    align-content: center;
    display: block;
    margin: 0 auto;
  }
  
  .glyphicon-menu-down {
  font-size: 50px;
  font-weight: bold;
}

.dropdown1 {
    float: left;
    overflow: hidden;
}

.dropdown1 .dropbtn1 {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.dropdown1:hover .dropbtn1 {
    background-color: red;
}


.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content1 a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content1 a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container one">
<header class="v-header">
    <div class="fullscreen-video-wrap">
      <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
      <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
      <video src="vid.mp4" autoplay loop>
    </video>
    </div>
    
    <div class="header-content text-md-center">
      <h1>GUPTA ARCHITECHTS</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
       <a href="#about-section">
          <span class="glyphicon glyphicon-menu-down"></span>
        </a>
    </div>
  </header>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="600" id="change">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a href="mamatemp.php"><img src="billy9.png" class="img-responsive" width="125"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#about-section">ABOUT</a></li>
          <li><a href="#works-section">WORKS</a></li> 

        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#press-section"><span class="glyphicon glyphicon-film"></span> PRESS</a></li>
        <li><a href="#contact-section"><span class="glyphicon glyphicon-envelope"></span> CONTACTS</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="about-section">
  <div class="container">
    <div class="section-title">               
      <h2>About Us</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4">
        <h4>Who We Are</h4>
        <p>Rupali Gupta  started Gupta  Architects in Amsterdam, The  Netherlands. She  is a registered architect eligible to practice in the EU and  India.  Her background as an architect, interior designer and  urban designer means that we work  at all scales with an interdisciplinary approach.</p>
      </div>
      <div class="col-md-4">
        <h4>What We Do</h4>
        <p>The  office  works with a team of specialists depending upon  the needs of the project.<b>Honours:</b>  1st   prize:  BNA  Young Architects Competition 2004 (team together with Sponge Architects, IOU Architecten)</p>
      </div>
      <div class="col-md-4">
        <h4>Why Choose Us</h4>
        <p>The  office  is specialised in niche  work  for a quality  and  design conscious clientÃšle. The  focus  of our work  is user  centric concepts, innovation and  'achieving more with less.<b>Design Signature:</b> Elegance, simplicity, nature and  serenity in our projects.</p>
      </div>
    </div>
    <video class="v" width="400" autoplay loop>
  <source src="walkthrough.mp4" type="video/mp4">
</video>
  </div>
</div>
</div>

<div class="pimg1">
    <div class="ptext">
      <span class="border1">
        Gupta Architect
      </span>
    </div>
  </div>

<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <h2>Our Portfolio</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".arch">Architecture</a></li>
            <li><a href="#" data-filter=".urb">Urban Designs</a></li>
            <li><a href="#" data-filter=".interior">Interiors</a></li>
            <li><a href="#" data-filter=".branding">Branding</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 arch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage/collage1.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Park Pavilion</h4>
                <small>Architecture</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/1a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 urb">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage2/collage2.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Experience Zone for Puvankara</h4>
                <small>Urban Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/9a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 interior">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage3/collage3.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>RB Hospital</h4>
                <small>Interior</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage4/collage4.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Pilot Stores</h4>
                <small>Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 arch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage5/collage5.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>A Villa By The Sea</h4>
                <small>Architecture</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/3a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 interior">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage6/collage6.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Modern Baking</h4>
                <small>Interior</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/8b.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 interior">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="collage7/collage7.html" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Chennai China</h4>
                <small>Interior</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/7a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 interior">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Dutch Young Architects Competition</h4>
                <small>Interior</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/5a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 arch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>A House for Three Generations</h4>
                <small>Architecture</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/2a.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Press Section -->


<div class="pimg1">
    <div class="ptext">
      <span class="border1">
        Gupta Architect
      </span>
    </div>
  </div>

<section class="section section-dark" id="press-section">
    <h2>PRESS</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
    <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/portfolio/03.jpg">
      <img src="img/portfolio/03.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/portfolio/01.jpg">
      <img src="img/portfolio/01.jpg" alt="Forest" width="600" height="400">
    </a>
  
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/portfolio/02.jpg">
      <img src="img/portfolio/02.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/portfolio/03.jpg">
      <img src="img/portfolio/03.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>
  </section>

<div class="pimg1">
    <div class="ptext">
      <span class="border1">
        Gupta Architect
      </span>
    </div>
  </div>



<!-- Contact Section -->
<form method="post" action="send.php">
  <div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
    </div>
    
    <div class="col-md-8">
      <h4>Leave us a message</h4>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default" id="success-btn">Send Message</button>
 
     </form>
    
    </div>
  </div>
</div>
</form>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 

<script type="text/javascript" src="js/jquery.isotope.js"></script> 


<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn1')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

</body>
</html>
