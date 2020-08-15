<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 55px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;

}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}




/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  

.nav-tabs li a {
      color: #777;
  }
  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
    .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg{
    background: white;
    color: black;
  }

  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}

  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }

  .thumbnail img {
    width: 100%;
    height: 150px;
    margin-bottom: 10px;
}

  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
 

.container {
      padding: 80px 120px;
  }
   h3, h4,{
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }

  h1{
    color: #111;
  }
  .pla{
    margin-left: 100px;
  }
  .fa-facebook {
  background: #3B5998;
  color: white;

}
.fa-linkedin {
  background: #007bb5;
  color: white;
}



</style>
</head>
<body>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#OurInstitution">OUR INSTITUTION</a></li>
        <li><a href="#placements">PLACEMENTS</a></li>
        <li><a href="#courses">COURSES</a></li>
        <li><a href="#contacts">CONTACT</a></li>
        <li><a href="finaladmin.php">ADMIN PAGE</a></li>
         <li><a href="multiplelogin.php">LOG OUT</a></li>
        
      </ul>
    </div>
  
  </div>
</nav>

<!--slideShow-->
<div class="slideshow-container">
<div class="mySlides fade">
    <img src="img1/backg1.jpg" style="width:100%; height: 600px; ">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <img src="img1/backg2.jpg" style="width:100%; height: 600px;">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <img src="img1/backg3.jpg" style="width:100%;height: 600px;">
  <div class="text">Caption Three</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br><br>
<div style="padding:0 16px;" id="OurInstitution">
  <img src="img1/ngilogo.png" style="width: 200px; height: 100px;">
  <img src="img1/logo1.png" style="width: 150px; height: 100px;">
 <h2> Nagarjuna College Of Engineering And Technology</h2>

<p>Nagarjuna College OF ENGINEERING AND TECHNOLOGYNagarjuna College of Engineering and Technology is a flagship institution under Nagarjuna Group of Institutions <abbr title="Nagarjuna Group of Institutions">(NGI)</abbr>. It is one of the largest technological campus located in Bangalore with a world class academic facilities and infrastructure facilities. The institution is an Autonomous body under Visvesvaraya Technological University <abbr title="Visvesvaraya Technological University">(VTU)</abbr>, and approved by AICTE. The institution is home to some of the best academician in technical education who have come from institutions like IITs, IISC & NIITs. The institute has one of the most efficient industrial tie-ups with industry specialized curriculum which makes it an excellent academic program for the development of student community.</p>
 
 <h3>Undergraduate Departments</h3>
<p>NCET offers Bachelor of Engineering (B.E.) 4 year degree programs in following disciplines under Autonomous scheme:</p>
<ul>
<li>Mechanical Engineering</li>
<li>Electronics and Communication Engineering</li>
<li>Civil Engineering</li>
<li>Computer Science Engineering</li>
<li>Information Science Engineering</li>
</ul>
<h3>Postgraduate Departments</h3>
<p>NCET offers post graduations programs (2 years) in following</p> 
<ul>
disciplines under autonomous scheme:

<li>M.Tech (Structural Engineering)</li>
<li>M.Tech (Construction Technology)</li>
<li>M.B.A.</li>
</div>
<br><br>

 <section class="bg-1" id="placements">
    
  <div class="block whitish parallax-sec">
        
    <div class="container">
      <div class="row">
              
        <div class="col-md-12 column">
          <div class="urgent-cause">
            <div class="row">
              <div class="col-md-12 column">
    <h2>INTERNATIONAL INTERNSHIPS</h2>
<p >Our students visit Foreign Universities to upgrade their skills by doing summer internships & research projects, which will enhance their career prospects & opportunities for higher studies.</p><br/><br/>
                                    
<h2>ASSOCIATED FOREIGN UNIVERSITIES</h2><br/><br/><p>
Technical University of Sofia (TUS), Bulgaria | University of Rome, Tor- Vergata, Italy | Athens information Technology, Greece | Ural Federal University, Russia | Stevens Institute of Technology, USA | Aarhus University, DenmarkNational Technical University of Ukraine "Kyiv Polytechnic Institute” | University of Arkansas, USA | ITU San Jose, California | Athlone Institute of Technology, Ireland, Dublin | Teesside University, Middlebrough, UK</p><br/><br/>
                                    
<img src="img1/ibm.png" style="width: 100px; height: 80px;" />
<img src="img1/wipro.jpg"  style="width: 100px; height: 80px;"  />
<img src="img1/comp.jpg" style="width: 100px; height: 80px;"  />
<img src="img1/tata.jpg"  style="width: 100px; height: 80px;"  />
                                    
                
                                    
                  
                  <!-- Urgent Progress -->
                </div><!-- Urgent Cause Detail -->
              </div>
                            
                            

            </div>
          </div><!-- Urgent Cause -->
        </div>
      </div>
    </div>
  </div>
</section><br><br>

 <!-- video-->
 <div id="placements" class="pla">
 <iframe width="420" height="345" src="https://www.youtube-nocookie.com/embed/QoiB7mFUWcc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
<iframe width="420" height="345" src="https://www.youtube-nocookie.com/embed/1ejCAW-xkzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="420" height="345" src="https://www.youtube-nocookie.com/embed/W2D4Nvttk44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="420" height="345" src="https://www.youtube-nocookie.com/embed/uvOlgC5Taqc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><br><br>


<!-- Container (servives Section) -->
<div id="courses" class="bg-1">
  <div class="container">
    <h3 class="text-center">Courses</h3>
    <p class="text-center">Courses Available</p>
    
    
    <div class="container-fluid text-center bg-grey">
    <div class="row text-center">
    
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img1/cs1.jpg">
        <p><strong>CSE/ISE</strong></p>
        <p>One of the most sought after courses amongst engineering students, Computer Science Engineering (CSE) is an academic programme which integrates the field of computer Engineering design. 
      </p>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img1/ec.jpg">
        <p><strong>ECE</strong></p>
        <p>he main objective of the BTech (ECE) program is to equip students with necessary core competency to succeed long-term in engineering/ entrepreneurship careers after completing their B.Tech.
       </p>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img1/civil.jpg">
        <p><strong>Civil Engineering</strong></p>
        <p>Civil Engineering involves planning, designing, constructing, maintaining and supervising infrastructures which includes facilities essential to modern life like highways, bridges and tunnels.
        </p>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img1/mech.jpg">
        <p><strong>ME</strong></p>
        <p>Mechanical engineering is the discipline that applies engineering physics, engineering mathematics, and materials science principles to design, analyze, manufacture, and maintain mechanical system.
    </p>
      </div>
    </div>


</div>
</div>
</div>


  <div id="contacts" class="container-fluid bg">
  <h1 class="text-center" >CONTACT US</h1>
  <br>
  
  <div class="row">
     <!--contect details-->
     <div class="col-sm-5">
       <p>Contact us</p>
       <p><span class="glyphicon glyphicon-map-marker"></span> Nagarjuna Group Of Institutions,
  80 Feet Road, Yalahanka New Town, Bengaluru-560 064 </p>
       <p><span class="glyphicon glyphicon-phone"></span>080 - 65653232 | 65363232</p>
       <p><span class="glyphicon glyphicon-envelope"></span> admission@ncetmail.com</p> 
         <p><strong>Location Map</strong></p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15527.952327473966!2d77.7282098!3d13.3510171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9434aad7474e7df!2sNagarjuna+College+Of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1548839350395" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>

     <div class="col-sm-7">
        <div class="row">
         
         <div class="col-sm-6 form-group">
           <input class="form-control" id="cname" name="name" placeholder="Name" type="text" required>
         </div>
         
         <div class="col-sm-6 form-group">
          <input class="form-control" id="cemail" name="email" placeholder="Email" type="email" required>
         </div>
        </div>
      
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      
        <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
       
      </div>
    
     </div>
    
  </div>
  
</div>
</div>
 <div >
        <h2>stay In Touch</h2>
        <a href="https://www.facebook.com/Nagarjunacollege.Bangalore/"class="fa fa-facebook"></a>
        <a href="https://www.linkedin.com/school/nagarjuna-college-bangalore" class="fa fa-linkedin"></a>
        </div> 
          
<br>
  <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Developed by shivani</p> 
</footer>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




</body>
</html>
