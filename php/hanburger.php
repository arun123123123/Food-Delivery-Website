     <!-- mobile nav -->
     <div class="mobile-nav-wrapper">
        <div class="mobile-nav">
            <a href="index.php#">Home</a>
            <a href="index.php#about">About</a>
            <a href="index.php#items">Items</a>
            <a href="index.php#contacts">Contacts</a>
            <a href="cart.php"><i class="fa fa-shopping-cart" id="cart1" aria-hidden="true"></i>Cart
        
            <?php

if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span></a>";
}else{

    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span></a>";
}

?>

                <a href="login.php" class="sign">Login</a>
                <a href="signup.php" class="sign">Signup</a>
            </div>
        </div>



        
    <script>

var menu = document.querySelector('#navBtn');
var close = document.querySelector('#closeBtn');
var menuWrapper = document.querySelector('.mobile-nav-wrapper');

menu.addEventListener('click',function(e){
    menuWrapper.style.display = 'block';
    close.style.display = 'block';
    menu.style.display = 'none';
    
})

close.addEventListener('click',function(e){
    menuWrapper.style.display = 'none';
    close.style.display = 'none';
    menu.style.display = 'block';
    
})

</script>