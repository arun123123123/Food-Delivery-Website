<?php

function cartElement($productimg,$productname,$productprice,$productdiscount,$productid){
    $element="
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-light\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid img11\">
                            </div>
                            <div class=\"col-md-6\">
                            <h5 class=\"pt-2\">$productname</h5>
                            <small class=\"text-secondary\">Seller:dailytuition</small>
                            <h5 class=\"pt-2\">
                            <small> <s class=\"text-secondary\"><i class=\"fa-solid fa-indian-rupee-sign fa-0.5x\"></i> $productprice</s> </small>
                            <span class=\"price\"><i class=\"fa-solid fa-indian-rupee-sign fa-0.5x\"></i> $productdiscount</span>
                            </h5>
                                <h5 class=\"pt-2\"></h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-white border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline text-center\">
                                    <button type=\"button\" class=\"btn bg-white border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <style>
                    .img11{
                        max-width: 100%;
                        background: orange;
                        background: radial-gradient(white 30%,orange 70%);
                        object-fit:cover;

                    }

                    .cart-items + .cart-items{
                        padding:2% 0;
                
                    }
                
                    </style>



                </form>

    
    
    
    ";
    echo $element;
}

?>