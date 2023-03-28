<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edu on wheels </title>
    <link rel="stylesheet" href="file1.css">
</head>
<body>
  <!-- Link of bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Navbar on the top of the page -->
<nav class="navbar navbar-expand-lg  bg-grey">
  <div class="container-fluid">
    <a class="navbar-brand" href="file1.php">Edu On Wheels</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Introduction.html">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ContactDetails.html">Contact Details </a></li>
           <li><a class="dropdown-item" href="Contact.php">Get In Touch</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Side Logo on the top of the page -->
<img src="pics/logo.jpg" alt="We are Sorry!!Error in loadig Images!!"height="100px" width="500px" class="idpic">

<!-- alert only on the first page on refresing  -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Edu On Wheels!</strong> Welcome to this platform we are glad to welcome you
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- link of social media apps -->
<div class="social-links">

  <a href="http://wa.me/9953843341">
  <button>  <div id="whatsapp" class="social-btn flex-center">
    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path></svg><span>Whatsapp</span>
</div></a>
</button>

<a href="https://www.linkedin.com/in/iit-an-truck-wala-s-135ab9268">
<button>  <div id="linkedin" class="social-btn flex-center">
    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path></svg><span>linkedin</span>
  </div></a>
</button>

<a href="https://instagram.com/eduonwheels?igshid=YmMyMTA2M2Y=">
<button>  <div id="Instagram" class="social-btn flex-center">
    
    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg><span>Instagram</span>
     
   
</div></a>
</button>

</div>
<!-- Id for slideshows -->
<div class="maindiv">
</div>

<!-- nav that is green box lies b\w the page box2 -->
<!-- div firstdesign including image of spaceship & h4  & nav includes h6 of id para1 inside box2-->
<nav id="box2"> 
  <img src="pics/spaceship.jpg" alt="We are Sorry!!Error In Loading Image" id="firstdesign">
<h4 id="head4"><strong><u> Edu On Wheels</u> </strong></h4>
  <br>
<p id="para1"> We are the providers of Edu-Tainment, a solution to all learners/ students in the easiest and interesting way and at their doorstep. We will be providing a solution for every little concept be it <br>
• Theory, <br>
• Hypothesis, <br>
• Theorem, <br>
• Stem Education, <br>
Fascinating and Sensitive topics relevant to society such as <br>
• Global Warming, <br>
• Poverty, <br>
• Pollution, <br>
• Illiteracy, <br>
• Corruption, <br>
• Inequality, <br>
• Terrorism, <br>
• Gender discrimination, <br>
• Violence against Women, <br>
and many more at a very early age and in a sustainable manner on the 9 D Platform. <br>
</p>
</nav>


<h3> <strong> Glimpses of Edu On Wheels</strong></h3>
<video autoplay=""controls=""loop="" muted>
  <source src="pics/voices of solar system.mp4" type="video/mp4" alt="Sorry! Error in loadig Image.">
</video>

<video autoplay=""controls=""loop="" muted>
  <source src="pics/Vedio2.mp4" type="video/mp4">
</video>


<nav id="para2">
  <p>
  <b> <strong> What We Do? </strong></b> <br>
 <strong> EduOnWheels- </strong> is a 9 d platform on a truck that provides tailor-made and customized concepts differentiated on an age-wise pattern that helps to empower you to practically understand the most important and complex-looking problems in a very entertaining way. It will have the added advantage of the following points: <br>
1. Anywhere, Anytime Learning. <br>
2. Connectedness, Collaboration, and Co-creation. <br>
3. Customization for a Learner-First approach. <br>
  </p>
</nav>

    <div class="container2">
        <h3> <u>Corporate Office Address :</u> </h3>
        <p>E-121,Chanakya Place <br>
        25 Feet Road Part-1,<br>
        New Delhi, 110059</p>
    
        <h3> <u>Office Details : </u></h3>
        <p>E-121,Chanakya Place <br>
        25 Feet Road Part-1,<br>
        New Delhi, 110059</p>

        <h3><u> Founder-Edu On Wheels :</u></h3>
        <p>Satinder singh <br>
        IIT-Delhi Alumni <br>
        NAB (University of Amsterdam) <br>
        (Ex-HCl/Igs/IGS/Abbott/USV/Converges/Glenmark/Cadila)<br>
        (+91 995 3843341)</p>
    
        <h3><u>Contact Details :</u></h3>
        <p>Sameer <br>
          IIT- IIM Alumni <br>
          ESSEC Business School Singapore Alumni <br>
          +91 9953 283947 <br>
</p>
        <br>

        <h3> <u> In Association with :</u></h3>
        <p>
          7-D Orbit <br>
          Firni Road <br>
          Pooth Delhi-110039 <br>
        </p>

        <a href="Contact.php">
        <button class="contactButton"> Contact
            <div class="iconButton">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
            </div>
          </button>
        </a>

        <a href="about.html">
        <button class="learn-more">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Learn More</span>
          </button>
    </div>
  </a>
    Go to Site-
    <a href="https://eduonwheels.com" target="_blank">Go to google</a><br>
    Go to Instagram-
    <a href="https://instagram.com/eduonwheels?igshid=YmMyMTA2M2Y=" target="_blank">@IITian Truck Wala</a><br>
    <!-- <a href="https://twitter.com" target="_blank">Go to twitter</a><br> -->
    Go to linkedin
    <a href="https://www.linkedin.com/in/iit-an-truck-wala-s-135ab9268" target="_blank">@IITian Truck Wala</a><br>

</body>
</html>