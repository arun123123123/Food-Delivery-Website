    <!-- Header Section starts -->

    <header class="header" id="header">
        <a href="#" class="logo" id="logo"><img src="./images/logo/kindpng_6746080.png" alt="" class="image"></a>
        <ul>
            <li><a href="index.php#">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#items">Items</a></li>
            <li><a href="index.php#contacts">Contacts</a></li>
            <li><a href="cart.php"><i class="fa fa-shopping-cart" id="cart1" aria-hidden="true"></i>Cart 
            
        
            <?php

            if(isset($_SESSION['cart'])){
                $count = count($_SESSION['cart']);
                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span></a>";
            }else{

                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span></a>";
            }

            ?>
        
        
        </li>
        </ul>

    
        
        <div class="menu">
        <i class="fa fa-bars fa-2x" id="navBtn" aria-hidden="true" style="color:rgb(7, 7, 7);"></i>
        <i class="fa fa-times fa-2x" id="closeBtn" aria-hidden="true" style="color:rgb(7, 7, 7);"></i>
        </div>
        <div class="menu1">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
        </div>
    </header>
    <hr>
  

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })


    </script>


    <!-- Header Section ends -->