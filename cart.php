<?php


require_once ("php/connection.php");
require_once ("php/component1.php");



?>

<?php
require_once ("php/masterdata.php");

if (isset($_POST['remove'])) {
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo"<script>alert('Product has been Removed...!')</script>";
                echo"<script>window.location = 'cart.php'</script>";
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
    <title>CART</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-white">

<?php
    require_once ("php/header.php");

       
?>

<?php
     require_once ("php/hanburger.php");

?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-6 col-md-7 col-sm-6">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                    <?php
                    $disc_total=0;
                    $total=0;
                        if(isset($_SESSION['cart'])){
                            $product_id = array_column($_SESSION['cart'], column_key:'product_id');
                            if($num > 0){
                            while($row=mysqli_fetch_assoc($result)){
                                foreach ($product_id as $id){
                                    if($row['id']==$id){
                                        cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['product_discount'],$row['id']);
                                        $total = $total + (int)$row['product_price'];
                                        $disc_total = $disc_total + (int)$row['product_discount'];
                                }
                            }
                        }
                        }
                    }else{
                        echo "<h1>Cart is empty</h1>";
                    }
                        
                    ?>
                
            </div>
        </div>
        <div class="col-6 col-md-4 col-sm-6 offset-md-1 border rounded mt-5 bg-light h-25">
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if(isset($_SESSION['cart'])){
                                $count=count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                                echo "<h6>Discount Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                                echo "<h6>Discount Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><i class="fa-solid fa-indian-rupee-sign fa-0.5x"></i> <?php echo $total ?></h6>
                        <h6><i class="fa-solid fa-indian-rupee-sign fa-0.5x"></i> <?php echo $disc_total ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6><i class="fa-solid fa-indian-rupee-sign fa-0.5x"></i> <?php echo $disc_total ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .price-details h6{
        padding:3% 2%;
    }
</style>
<?php

require_once ("php/footer.php");
?>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>
</html>