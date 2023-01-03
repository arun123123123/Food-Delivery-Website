<?php

function component($productname,$productprice,$productdiscount,$productimg,$productid){
    $element ="

<div class=\"col-6 col-sm-6 col-md-4 col-lg-3 my-2\">
            <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                <img src =\"$productimg\" alt=\"\" class=\"img-fluid card-img-top img-responsive img10\">
                <style>
                .img10{
                    max-width: 100%;
                    height: 250px;
                    background: orange;
                    background: radial-gradient(white 30%,orange 70%);
                    object-fit:cover;
                }
                </style>              
            </div><br> 
                <h3>$productname</h3>
                
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
                    <div class=\"stars\">
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star-half-alt\"></i>
                    </div>
                    <h5>
                    <small> <s class=\"text-secondary\"><i class=\"fa-solid fa-indian-rupee-sign fa-0.5x\"></i> $productprice</s> </small>
                    <span class=\"price\"><i class=\"fa-solid fa-indian-rupee-sign fa-0.5x\"></i> $productdiscount</span>
                    </h5>
                    <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3 button\">Add to Cart <i class=\"fa-solid fa-basket-shopping\"></i></button>


                    <style>
                 .button{
     padding:5px;
     background-color: orange;
     text-decoration: none;
     width: auto;
     font-weight: bold;
     border: 1px solid orange;
     border-radius: 3px;
     color:black;
 }
             </style>
            
                  


                    <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
         
            </div>

               
        
            </form>

            
        </div>

        ";


        echo $element;

}








        ?>