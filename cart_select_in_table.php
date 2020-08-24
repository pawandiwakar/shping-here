

<?php
 

     //include "function/function.php";

 

?>



 <?php
  

  include "function/function.php";
  include "include/db.php";
    
	if(isset($_GET['copy'])){

   $ip = getRealIpAddr();
 
   $fetch_cart = "select * from carts where ip_adrs='$ip'"; 

   $run=mysqli_query($conn,$fetch_cart);
 
   $count=mysqli_num_rows($run);

   }
  else
   {
   
   echo "nothing";
   }

 ?>