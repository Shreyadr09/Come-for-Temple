<?php
 session_start();
require_once('./php/component.php');
require_once('./php/CreateDB.php');

// create instance of Createdb class
$database1 = new CreateDb(dbname:"Mydb",tablename:"Temple1");
$database2 = new CreateDb(dbname:"Mydb",tablename:"Temple2");
$database3 = new CreateDb(dbname:"Mydb",tablename:"Temple3");
$database4 = new CreateDb(dbname:"Mydb",tablename:"Temple4");
$database5 = new CreateDb(dbname:"Mydb",tablename:"Temple5");
if (isset($_POST['add'])){
  /// print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){

      $item_array_id = array_column($_SESSION['cart'], "darshanid");

      if(in_array($_POST['darshanid'], $item_array_id)){
          echo "<script>alert('Product is already added in the cart..!')</script>";
         // echo "<script>window.location = 'darshan.php'</script>";
      }else{

          $count = count($_SESSION['cart']);
          $item_array = array(
              'darshanid' => $_POST['darshanid']
          );
          $_SESSION['cart'][$count] = $item_array;
          //print_r($_SESSION['cart']);
      }

  }else{

      $item_array = array(
              'darshanid' => $_POST['darshanid']
      );

      // Create new session variable
      $_SESSION['cart'][0] = $item_array;
      //print_r($_SESSION['cart']);
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darshan</title>
    <link rel="stylesheet" href="darshan.css">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->

</head>
 <body >
   <?php
   require_once('php/header.php');
    
   ?>

<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 170">
    <div class="flip-card">
  
      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img src="upload/image1.jpg" style="height: 100%;border-radius: 24px;" >
          <figcaption>Select a temple</figcaption>
        </figure>
  
        
      </div>
  
      <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img src="upload/image2.jpeg" style="height: 100%;border-radius: 24px;">
        </figure>
  
        
        <ul>
          <li><a href="#Temple1">Temple 1</a></li>
          <li><a href="#Temple2">Temple 2</a> </li>
          <li><a href="#Temple3">Temple 3</a></li>
          <li><a href="#Temple4">Temple 4</a></li>
          <li><a href="#Temple5">Temple 5</a></li>
        </ul>

  
       
      </div>
  
    </div>
  </div>
  <!-- /flip-card-container -->

  <!-- start -->
 <div class="abc" id="Temple1">
  <h1 align="center">Temple 1</h1>

<?php
$result = $database1->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['darshan_image'], $row['darshan_name'], $row['darshan_price'],$row['id']);
}
?>
</div>
<!-- end -->
<!-- start -->
<div class="abc" id="Temple2">
  <h1 align="center">Temple 2</h1>

<?php
$result = $database2->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['darshan_image'], $row['darshan_name'], $row['darshan_price'],$row['id']);
}
?>
</div>
<!-- end -->
<!-- start -->
<div class="abc" id="Temple3">
  <h1 align="center">Temple 3</h1>

<?php
$result = $database3->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['darshan_image'], $row['darshan_name'], $row['darshan_price'],$row['id']);
}
?>
</div>
<!-- end -->
<!-- start -->
<div class="abc" id="Temple4">
  <h1 align="center">Temple 4</h1>

<?php
$result = $database4->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['darshan_image'], $row['darshan_name'], $row['darshan_price'],$row['id']);
}
?>
</div>
<!-- end -->
<!-- start -->
<div class="abc" id="Temple5">
  <h1 align="center">Temple 5</h1>

<?php
$result = $database5->getData();
while ($row = mysqli_fetch_assoc($result)){
    component($row['darshan_image'], $row['darshan_name'], $row['darshan_price'],$row['id']);
}
?>
</div>
<!-- end -->



      </div>

     
</body>

</html>
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');
   
    *{
  scroll-behavior:smooth;
}
    body{
    background-image: linear-gradient(to right,rgb(0, 0, 0),#5511a9,#000000,rgb(0, 0, 0),#5511a9,#000000);
    animation-name: abc;
  animation-duration: 1s;
    overflow:scroll;
  
}
@keyframes abc
{
  0%{opacity: 0;}
  100%{opacity: 1;}
}

ul li a {
    color: white;
  }

.abc {
 
  justify-content: center;
  align-items: center;
  padding-left:450px;  
  height:800px;
  color:white;
}

.container  {
  
  float: left;
  height: 300px;
  width: 300px;
  margin-left:10px;
  margin-right: 10px;
  margin-top:1.5%;
  margin-bottom: 1.5%;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 0 20px 8px #434242;
  transition-duration: .5s;

}
.forimg{
z-index:-1;
top:0;
margin-left:-10%;
}

.for-text{
  margin-top:-5%;
  text-align: center;
  z-index:1;
  color: rgb(255, 255, 255);
  font-family: 'Merriweather', serif;
  font-size: small;
  line-height: 0.9;
  
  
}
.content {
  margin-top:-85%;
margin-left:-7%;
  background-color: #0e0e0e;
  width: 320px;
  height: 120px;
  padding:5%;
  opacity:0.95;
  /* justify-content: center; */
  
}


h5 {
  color:white;
  font-weight: 900;
  text-align: center;
  margin-top: 2%;
}

h6 {
  font-weight: 300;
  margin-top:2%;
}
button{
  width:140px;
  display:flex;
  font-size: 15px;
  border-radius: 30px;
  padding:15px 15px 15px 15px;
  transition-duration: 0.3s;
  text-align:center;
  opacity:1;
  margin-left:25%;
  /* margin-top: 5%;
  margin-bottom: 5%; */
  z-index:1;
}
button:hover{
  font-size: 16px;
  padding:16px 16px 16px 16px;
  box-shadow: 0 0 4px 2px white;
    background-color:#5511a9  ;
    border:none;
    color: white;
    opacity:1;
    z-index:1;
}


.container:hover {
  width:310px;
  
}

#cart_count{
    text-align: center;
    margin-left:-10%;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
    color: yellow;
}

#header{
  position: sticky;
  top:0px;
  background:#5511a9;
  /* color:white; */
  z-index:1;
}
  </style>