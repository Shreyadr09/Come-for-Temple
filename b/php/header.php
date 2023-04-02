<header id="header"  >
    <nav class="navbar navbar-expand-lg" >
        <a href="darshan.php" class="navbar-brand">
            <h3 class="px-5" style="color:white;">
                <i class="fas fa-shopping-basket"></i> DARSHANS
            </h3>
        </a>
    

            <div class="mr-auto"></div>
                <a href="cart.php" class="nav-item nav-link active">
                    <h4 class="px-5 cart">
                         <i class="fas fa-shopping-cart" style="z-index:-1;margin-right:10%;color:white"></i>
                        <?php

                        if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" >$count</span>";
                        }else{
                        echo "<span id=\"cart_count\">0</span>";
                        }

?>
                    </h4>
                </a>
        </nav>
</header>