<?php
function component($darshan_image,$darshan_name,$darshan_price,$id){
    $element="
    <div class=\"container\">
    <img src=\"$darshan_image\"height='330px' width='330px' class=\"forimg\"/>
    <div class=\"content\">
    <form action=\"darshan.php\" method=\"post\">
  <div class=\"for-text\">
    <h5 align=\"center\">$darshan_name</h5>
    <h6 align=\"center\"> Price:Rs.$darshan_price</h6>
    <button type=\"submit\" name=\"add\" align=\"center\">Add to cart <i class=\"fas fa-shopping-cart\"></i></button>
    <input type=\"hidden\" name=\"darshanid\" value=\"$id\">
    </div>
  </div>
  </form>
</div>
";
echo $element;
}






function cartElement($productimg, $productname, $productprice, $productid){
  $element = "
  
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
  <div class=\"card mb-3\" >
  <div class=\"card-body\">
    <div class=\"d-flex justify-content-between\">
      <div class=\"d-flex flex-row align-items-center\">
        <div>
          <img
            src=\"$productimg\"
            class=\"img-fluid rounded-3\" alt=\"Shopping item\" style=\"width: 65px;\">
        </div>
        <div class=\"ms-3\">
          <h5>$productname</h5>
        </div>
      </div>
      <div class=\"d-flex flex-row align-items-center\">
        <div style=\"width: 50px;\">
          
        </div>
        <div style=\"width: 80px;\">
          <h5 class=\"mb-0\">$productprice</h5>
        </div>
        <button style=\"color: red;\" style=\"border:none;bacakground-color:none;\"><i class=\"fas fa-trash-alt\"></i></button>
        <input type=\"hidden\" name=\"remove\" value=\"\" id=\"icon-button\">
      </div>
    </div>
  </div>
</div>
              </form>
  
  ";
  echo  $element;
}
?>