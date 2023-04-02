<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db1 = new CreateDb(dbname:"Mydb",tablename:"Temple1");
$db2 = new CreateDb(dbname:"Mydb",tablename:"Temple2");
$db3 = new CreateDb(dbname:"Mydb",tablename:"Temple3");
$db4 = new CreateDb(dbname:"Mydb",tablename:"Temple4");
$db5 = new CreateDb(dbname:"Mydb",tablename:"Temple5");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["darshanid"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

<?php
   require_once('php/header.php');
    
   ?>
    <section class="h-100 " style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div class="row">

              <div class="col-lg-7" style="float:left;">
                <h5 class="mb-3"><a href="darshan.php" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <h2 >Darshans of respective temples</h2>
                    <p class="mb-0"><?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>YOU HAVE $count ITEMS IN YOUR CART</h6>";
                            }else{
                                echo "<h6>YOU HAVE 0 ITEMS IN YOUR CART</h6>";
                            }
                        ?></p>
                  </div>
                </div>

                <?php

                $total1 = 0;$table1_has_items = false;
                $total2 = 0;$table2_has_items = false;
                $total3 = 0;$table3_has_items = false;
                $total4 = 0;$table4_has_items = false;
                $total5 = 0;$table5_has_items = false;
                $total  = 0;


                if (($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'darshanid');
                    echo "<h3 style='border-bottom: 1px solid rgb(189, 184, 194);margin-bottom:4%;margin-top:4%;'>Temple 1 </h3>";
                      $result = $db1->getData();
                      while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['darshan_image'], $row['darshan_name'],$row['darshan_price'], $row['id']);
                                $total1 = $total1 + (int)$row['darshan_price'];
                            }
                        }
                        if (in_array($row['id'], array_column($_SESSION['cart'], 'darshanid'))) {
                          $table1_has_items = true;
                        }
                      }
                      if ($table1_has_items==0) {
                        echo "No Darshans in Temple 1";
                      }
                    

                    echo "<h3 style='border-bottom: 1px solid rgb(189, 184, 194);margin-bottom:4%;margin-top:4%;'>Temple 2 </h3>";
                    $result = $db2->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['darshan_image'], $row['darshan_name'],$row['darshan_price'], $row['id']);
                                $total2 = $total2 + (int)$row['darshan_price'];
                            }
                        }
                        if (in_array($row['id'], array_column($_SESSION['cart'], 'darshanid'))) {
                          $table2_has_items = true;
                        }
                      }
                      if ($table2_has_items==0) {
                        echo "No Darshans in Temple 2";
                      }
                    
                    echo "<h3 style='border-bottom: 1px solid rgb(189, 184, 194);margin-bottom:4%;margin-top:4%;'>Temple 3 </h3>";
                    $result = $db3->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['darshan_image'], $row['darshan_name'],$row['darshan_price'], $row['id']);
                                $total3 = $total3 + (int)$row['darshan_price'];
                            }
                        }
                        if (in_array($row['id'], array_column($_SESSION['cart'], 'darshanid'))) {
                          $table3_has_items = true;
                        }
                      }
                      if ($table3_has_items==0) {
                        echo "No Darshans on Temple 3";
                      } 
                      
                    echo "<h3 style='border-bottom: 1px solid rgb(189, 184, 194);margin-bottom:4%;margin-top:4%;'>Temple 4 </h3>";
                    $result = $db4->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['darshan_image'], $row['darshan_name'],$row['darshan_price'], $row['id']);
                                $total4 = $total4 + (int)$row['darshan_price'];
                            }
                        }
                        if (in_array($row['id'], array_column($_SESSION['cart'], 'darshanid'))) {
                          $table4_has_items = true;
                        }
                      }
                      if ($table4_has_items==0) {
                        echo "No Darshans in Temple 4";
                      } 
                    
                    echo "<h3 style='border-bottom: 1px solid rgb(189, 184, 194);margin-bottom:4%;margin-top:4%;'>Temple 5 </h3>";
                    $result = $db5->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['id'] == $id){
                                cartElement($row['darshan_image'], $row['darshan_name'],$row['darshan_price'], $row['id']);
                                $total5 = $total5 + (int)$row['darshan_price'];
                            }
                        }
                        if (in_array($row['id'], array_column($_SESSION['cart'], 'darshanid'))) {
                          $table5_has_items = true;
                        }
                      }
                      if ($table5_has_items==0) {
                        echo "No Darshans in Temple 5";
                      }

                 $total=$total1+$total2+$total3+$total4+$total5;
                 //print_r($_SESSION['cart']); 

                  
                }else{
                    echo "<h1 style='color:rgb(189, 184, 194)'>Your cart is Empty</h1>";
                }

                 ?>          

                <div>
            </div>
        </div>
    <div class="col-lg-5" style="float:right">
                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h3' class="mb-0">Card details</h3>
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2"><?php
                            echo "Rs".$total;
                            ?></p>
                    </div>

                    <!-- <div class="d-flex justify-content-between">
                      <p class="mb-2">Charges(if outside India)</p>
                      <p class="mb-2">Rs.800.00</p>
                    </div> -->

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2">><?php
                            echo "Rs".$total;
                            ?></p>
                    </div>
                  
                    <button type="button" class="btn btn-info btn-block btn-lg" onclick="response()">
                      <div class="d-flex justify-content-between">
                        <span><?php
                            echo "Rs".$total;
                            ?></span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<script>
  function response(){

    if (<?php echo $total;?>!==0){
      window.location.href="response.html"
    }
  }
</script>
<style>
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

#cart_count{
    text-align: center;
    margin-left:-10%;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
    color: white;
}

button {
  border: none;
  background: none;
}
#header{
  background-color: black
}
</style>