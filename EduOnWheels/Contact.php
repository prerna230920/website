
<!--  Using JavaScript to call user to get data to collect on Database.  -->
<script>
  function clearErrors(){
    errors = document.getElementByClassName('formerror');
    for(let item of errros){
      item.innerHTML ="";
    }
  }
  function seterror(id, error){
    /* set erroer inside tag of id */
    element = document.getElementById(id);  
    element.getElementsByClassName('formerror')[0].innerHTML = error;
  }
  function validateForm(){
    var returnval = true;
    clearErrors();

    /* perform Validation  and if validaion fails ,set the value of returnval to false */
    var name = document.forms['myForm']['name'].value;
    if (name.length<3){
      seterror("name", "*Name is too short!");
      returnval = false;
    }
    if (name.length == 0){
      seterror("name", "*Name can not be Null!");
      returnval = false;
    }
    var email = document.forms['myForm']['email'].value;
    if (email.length>50){
      seterror("email", "*Email is too long!");
      returnval = false;
    }
    var phone = document.forms['myForm']['phone'].value;
    if (phone.length>10){
      seterror("phone", "*Invalid Phone Number!");
      returnval = false;
    }
    return returnval;
  }
</script>


<!-- adding css to page -->
<link rel="stylesheet" href="Contact.css">

<!-- Link of bootstrap  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Navbar in the top of page  -->
    <nav class="navbar navbar-expand-lg bg-dark ">
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
    <!-- logo  -->
    <img src="pics/logo.jpg" alt="We are Sorry!!Error in loadig Images!!"height="100px" width="500px" class="idpic">

    <!-- Page Starts from the box -->
<center>  
<nav id="nav1">
<form action="" method="post" name = "myForm" onsubmit="return validateForm()" >
  <label>Name</label>
  <input type="text" name="name" placeholder="Name" required><br>
  <label>Email</label>
  <input type="email"name="email" placeholder="Email" required><br>
  <label>Phone </label>
  <input type="phone" name="phone" placeholder="Phone Number" required><br>
  <label>Query</label>
  <textarea name="commnet" id="comment" cols="75" rows="3" placeholder="Add Your Comment"></textarea>
  <div class="btn"><br>
  <center>
  <input type="Submit" name="Submit">
  <button btn-primary>Cancel</button>
  </center>
</form>  
</nav>
</center>

<!-- Adding  button in the end of the page -->
  <center>
    <a href="file1.php" class="btn1">  Previous </a>
    <!-- <a href=" Contact.html" class="btn1">  For more Details </a> -->
  </center>    



<?php
 include 'conn.php';
 if(isset($_POST['Submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
      
     $insert = "INSERT INTO `eduonwheels`(`name`, `email`, `Phone`) VALUES ('$name','$email','$phone')";
     $insert_run = mysqli_query($conn , $insert);
     };
?>
