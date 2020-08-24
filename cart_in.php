<?php
//include "function/function.php";
 include "include/db.php";


if(isset($_GET['copy'])){

 $in_crt=$_GET['copy'];

 $ip = getRealIpAddr(); 
//echo $ip;


$check= "select * from  carts where c_id =$in_crt AND ip_adrs= '$ip'";
 
 $chq_run = mysqli_query($conn,$check);

    if(mysqli_num_rows($chq_run)>0)
        
		 {
               echo "";
            }
 
 else
      {

//include "include/db.php";


$insrt = "insert into carts(c_id,ip_adrs) values($in_crt,'$ip')";
 
$r= mysqli_query($conn,$insrt);
      
	  echo "<script>window.open('index.php','_self')</script>";
	  
	  
	    }



}







?>