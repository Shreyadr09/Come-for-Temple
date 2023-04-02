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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Come for Temple</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="login.css" />
  <link rel="stylesheet" href="logout.css" />
  <!-- links for modal box -->
</head>

<body>
  <div class="hero">
    <div class="navbar">
      <img src="images/logo.png" class="logo" />
    </div>
    <div class="content" id="content">
      <h2>Temple <br />at your doorsteps!</h2>
      <div class="login">
        <button type="button" onclick="openlogin();">
          Join our Community
        </button>
      </div>
    </div>
    <div class="petals">
      <img src="images/petals.png" />
      <img src="images/petals.png" />
      <img src="images/petals.png" />
      <img src="images/petals.png" />
      <img src="images/petals.png" />
      <img src="images/petals.png" />
      <img src="images/petals.png" />
    </div>
    <!-- login/signin -->
    <div class="loginform" id="loginform">
      <div class="container" id="container">
        <!-- sign up -->
        <div class="form-container sign-up-container">
          <form action="signup.php" method="post">
            <h1>Create Account</h1>
            <!-- <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <span>use your email for registration</span>
              <input type="text" name="user-name"  placeholder="User Name" required>
              <input type="email" name="user-email" placeholder="Email" required>
              <input type="password" name="user-pass" placeholder="Password" required>
              <button type="submit" name="signup-btn" value="Signup">Signup</button>
          </form>
        </div>

        <!-- login -->
        <div class="form-container sign-in-container">
          <form action="login.php" method="post">
            <h1>Log in</h1>
            <!-- <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <span>use your account</span>
            
              <input type="text" name="user-name" placeholder="User Name">
              <input type="password" name="user-pass"  placeholder="Password">
              <button type="submit" name="login-btn" value="Login">Login</button>
          </form>
        </div>

        <script>
          document.getElementsByName('user-name')[0].value = '';
          document.getElementsByName('user-pass')[0].value = '';
          document.getElementsByName('user-email')[0].value = '';
      </script>

        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back!</h1>
              <p>
                To keep connected with us please login with your personal info
              </p>
              <button class="ghost" id="signIn">Log In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello!</h1>
              <p>Enter your personal details and start journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- logout popup modal-->
    <form action="logout.php" method="POST">
    <div id="outconfirmation" class="extra">
      <!-- <div class="circle">
        <i class="fa-solid fa-xmark"></i>
      </div> -->
      
      <div class="logout_main">
        <h1 class="logout_head">Logout !</h1>
        <p>Are you sure you want to Logout ?</p>
        <div class="btns"><button type="submit">Yes</button>
          <button type="button" onclick="closelogout();">No</button>
        </div>
      </div>
    </div>
      </form>
    


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
    <ul>
      <li>
        <a href="index.php">
          <img src="images/menubtn.png" class="logo" />
        </a>
      </li>
      <li>
        <a href="index.php">
          <i class="fa-sharp fa-solid fa-house left_icons"></i>
          <span class="nav-item">Home</span>
        </a>
      </li>
      <li>
        <a href="about.html">
          <i class="fa-solid fa-address-card left_icons"></i>
          <span class="nav-item">About Us</span>
        </a>
      </li>
      <li>
        <a href="services.php">
          <i class="fa-solid fa-list-check left_icons"></i>
          <span class="nav-item">Services</span>
        </a>
      </li>
      <li>
        <a href="contact.html">
          <i class="fa-solid fa-message left_icons"></i>
          <span class="nav-item">Contact Us</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-sign-out-alt left_icons"></i>
          <span class="nav-item" onclick="openlogout();">Log out</span>
        </a>
      </li>
      <li>
        <a href="index.php">
        <i class="fa-solid fa-user left_icons"></i>
        <span class="nav-item"><?php echo $user; ?></span>
        </a>
      </li>
    </ul>
  </nav>
  </div>
  <script src="script.js"></script>
</body>

</html>