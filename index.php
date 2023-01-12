<?php
require_once ("php/masterdata.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <?php
        require_once ("php/header.php");
    ?>

    <?php
        require_once ("php/hanburger.php");
    ?>


       
   
  <!-- Home Section starts -->
  <div class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6  left1">    
                <img src="./images/bg/transparent-salad-5e152ad3cd71e4.4882789415784455238415.png" alt="" class="home-img image-fluid">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="left1">
                    <h1>Healthy Food For a Healthy Life</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
                    <a href="#items" class="link-btn">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- Home Section ends -->


    <!-- About Section starts -->

    <div class="about" id="about">
        <div class="container header-wrapper1">
            <h1 class="text-center">ABOUT US</h1>       
        </div>
        <hr>
        <div class="container">
            <div class="row hero-section">
                <div class="col-sm-12 col-md-6">
                    <div class="left">
                            <h1>True Healthy Food <br> For Your Family</h1>
                            <p><span>1</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><span>2</span> Reprehenderit, possimus. Facere dolores aspernatur<br><span>3</span> soluta explicabo, ad ipsum esse earum. At saepe delectus<br><span>4</span> quibusdam officiis accusantium ducimus quo <br><span>5</span> exercitationem asperiores ullam.</p>
                            <a href="#items" class="link-btn">Order Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="./images/bg/toppng.com-clip-art-library-download-hamburger-fast-food-junk-977x966.png" alt="" class="home-img image-fluid">
                </div>
            </div>
        </div>
    </div>
    <hr>


<!-- About Section ends -->



    <!-- Items Section starts -->


    <div class="items" id="items">
        <div class="container header-wrapper1">
            <h1 class="text-center">ITEMS</h1>       
        </div>
        <hr>
        <div class="container header-wrapper5">
            <h1 class="text-center">Burger</h1>       
        </div>
        <div class="container">
            <div class="row text-center py-5">
            <?php
                
                
                if($num > 0){
                
            
                while($row=mysqli_fetch_assoc($result)){
                    component($row['product_name'],$row['product_price'],$row['product_discount'],$row['product_image'],$row['id']);
                }
                
                };
            
            
            
          
            ?>

        

            </div>

            
            
            </div>

        
                   
           
    </div>


    
    
                
    <!-- Items Section ends -->
    
    
    <!-- Footer Section starts -->

    <div class="footer" id="contacts">
        <div class="container1 text-center hii">
            <div class="row">
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <p>+123-456-7890</p>
                    <p>+111-222-3333</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>Kerala, india - 695512</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>09:30am to 10:00pm</p>
                </div>
                <div class="col-sm-12 col-md-3 header-wrapper4">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>arunjithu23@gmail.com</p>
                    <p>aruncsesist1822@gmail.com</p>
                </div>
                
            </div>
        </div>
        
    </div>

    <!-- Footer Section ends -->

                <?php

                    require_once ("php/footer.php");
?>
    

    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>





</body>
</html>