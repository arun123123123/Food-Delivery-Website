<?php

include ("php/connection.php");

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        echo'<script>alert("Your account is already registered please login!")</script>';
    }

    else{
        $insert= "INSERT INTO signup(email,password)VALUES('$email','$password')";
        mysqli_query($conn,$insert);
        header("location:login.php");
    }

}

?>

<?php
require_once ("php/masterdata.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
        
        <!-- Header Section starts -->

        <?php
        require_once ("php/header.php");
    ?>


    <!-- Header Section ends -->

     <!-- mobile nav -->
     <?php
        require_once ("php/hanburger.php");
    ?>
    
   <div class="main">
        <form class="login" action="" method="post">
            <h1>SIGNUP</h1>
            <input type="email" name="email" placeholder="Enter your mail ID" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="submit" class="button">Signup</button><br><br>
            Have an account?&nbsp;<a href="login.php">Login Here</a>
        <style>
        .button{
    margin: 10px;
    padding: 5px;
    background-color: orange;
    text-decoration: none;
    width: 20%;
    color: white;
    font-weight: bold;
    border: 1px solid orange;
    border-radius: 3px;
}
        </style>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



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


<?php

require_once ("php/footer.php");
?>

</body>
</html>