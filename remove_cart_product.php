<?php

include "include/db.php";


if(isset($_GET['dlt']))
{
$dlt_id=$_GET['dlt'];

 $dlt_pro_query= "delete from  carts where c_id='$dlt_id'"; 
 
 $run_dlt_pro=mysqli_query($conn,$dlt_pro_query);

    if($run_dlt_pro)
          {
         
	      echo "<script>window.open('cart-added.php','_self')</script>";

          }

  else
  
      {
  
       echo "<h1>delete nothing</h1><script>window.open('remove_cart_product.php','_self')</script>";
   
      }
}










?>