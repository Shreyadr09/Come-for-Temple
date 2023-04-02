<?php
require_once('source/session.php');

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
  $user = $_SESSION['username'];
} else {
  $user = 'USER';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="services.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link rel="stylesheet" href="logout.css" />
  <title>Services</title>
</head>
<body>
 <div class="main">
  <div class="temple" >
    <a href="http://localhost/the-final-project/b/darshan.php">
    <img src="images/temple2.png" class="image" height="670" width="520" />
    <div class="middle">
    <div class="text">
      Darshans
    </div>
  </a>
    </div>
  </div>
 </div>
  <div class="seva">
    <img src="images/seva.png" class="image" height="450" width="200"/>
    <div class="middle1" >
      <div class="text">
        Click on Temple
      </div>
 </div>
  </div>
  <div class="darshan">
    <img src="images/darshan.png" class="image" height="330" width="330"/>
    <div class="middle2">
      <div class="text">
        Click on Temple
      </div>
 </div>
 </div>
   




 
   <!-- logout popup modal-->
   
    <div id="outconfirmation" class="extra">
      <!-- <div class="circle">
        <i class="fa-solid fa-xmark cancel_btn"></i>
      </div> -->
      
      <div class="logout_main">
        <h1 class="logout_head">Logout !</h1>
        <p>Are you sure you want to Logout ?</p>
        <form action="logout.php" method="POST">
        <div class="btns"><button type="submit">Yes</button>
          <button type="button" onclick="closelogout();">No</button>
        </div>
      </form>
      </div>
    </div>
      
  <style>
    button
    {width: 200px;
    margin-right: 10px;
    color: #fbfcfd;
    padding: 10px 25px;
    background: transparent;
    border: 1px solid #fff;
    border-radius: 20px;
    outline: none;
    cursor: pointer;
    }
    

    button:hover {
    cursor: pointer;
    background-color: white;
    color: black;
}
  </style>


  <!-- Confirm Logout -->
  <div id="outdone" class="extra">
    <div class="circle">
      <i class="fa-regular fa-face-frown cancel_btn"></i>
    </div>
    <div class="logout_main logout_done">
      <h1>Logged Out Successfully :</h1>
    </div>
  </div>

</div>





 <!-- navigation menu -->
 <nav>
  <ul style=" list-style-type: none;">
    <li>
      <a class="abcd" href="index.php">
        <img src="images/menubtn.png" class="logo" />
      </a>
    </li>
    <li>
      <a class="abcd" href="index.php">
        <i class="fa-sharp fa-solid fa-house left_icons"></i>
        <span class="nav-item">Home</span>
      </a>
    </li>
    <li>
      <a class="abcd" href="about.html">
        <i class="fa-solid fa-address-card left_icons"></i>
        <span class="nav-item">About Us</span>
      </a>
    </li>
    <li>
      <a class="abcd" href="services.php">
        <i class="fa-solid fa-list-check left_icons"></i>
        <span class="nav-item">Services</span>
      </a>
    </li>
    <li>
      <a class="abcd" href="contact.html">
        <i class="fa-solid fa-message left_icons"></i>
        <span class="nav-item">Contact Us</span>
      </a>
    </li>
    <li>
      <a class="abcd" href="#">
        <i class="fas fa-sign-out-alt left_icons"></i>
        <span class="nav-item" onclick="openlogout();">Log out</span>
      </a>
    </li>
    <li>
        <a class="abcd" href="index.php">
        <i class="fa-solid fa-user left_icons"></i>
        <span class="nav-item"><?php echo $user; ?></span>
        </a>
      </li>
  </ul>
 </nav>
</body>
<script src="script.js"></script>
</html>