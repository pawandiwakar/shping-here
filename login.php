


<?php

session_start();

include "function/function.php";


if(isset($_POST['login']))
  {
// start vaalidation 

    if($_POST['email']== ""  ||  $_POST['password']== "")
   {
    
	 header("location:index.php?value=1");



}


 else
     {
      $u_eml = $_POST['email'];

      $u_pwd = $_POST['password'];
	  
                include "include/db.php";
       
	     $login_query = "select * from resisters where c_email='$u_eml' AND c_password='$u_pwd'";
 
        $login_run =  mysqli_query($conn,$login_query);
 
        $count = mysqli_num_rows($login_run);
	
		// . . . according to ipp address. .. . . 
		
		$to_ipaddrs=getRealIpAddr();
		
	    $cart_query= "select * from carts where ip_adrs='$to_ipaddrs'";
	    $run_cart=mysqli_query($conn,$cart_query);
		$check_cart=mysqli_num_rows($run_cart);
		 
 
         if($count==0)
	        
			    {
				
				
				//  .  . . . .fetch customer name for show in index page . . . . 
				  
				 /* session_start();
				
				  while($cst_nm = mysqli_fetch_array($login_run))
				   {
								
			        $_SESSION[$c_name]= $cst_nm['c_name'];
				
				     $_SESSION[$c_name]
				
				
				         header("location:index.php");
						 
				        
						 } */
				
				
				
          
	   
                       header("location:ragister.php");
           
		      }


               if($count==1 AND $check_cart==0)
                
			  {
             
			   $_SESSION['c_email']= $u_eml;
          
		       setcookie("ready","1",time()+(30*24*60*60));
			
                    header("location:index.php");
              }
                   else
				   {
			    $_SESSION['c_email']=  $u_eml;
			   
			        echo "<script>window.open('checkout.php','_self')</script>";
			   
			       }
        }

 }










?>