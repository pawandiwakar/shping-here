<?php
session_start();
include "include/db.php";
include "function/function.php";
if(isset($_POST['sub'])){

//. . . .inser customer register page with Ip-add . . . .. .
 
$reg_ip= getRealIpAddr();

$u_id=uniqid();

$name=$_POST['name'];
$l_name=$_POST['l_name'];
$m_num=$_POST['m_num'];
$radi=$_POST['radi'];
$eml=$_POST['eml'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$code=$_POST['code'];
 
  
      $insrt_query="insert into resisters(c_u_id,c_name,c_l_name,c_mobile,c_gender,c_email,c_password,c_confirm_pwd,reg_ip_add,c_capcha) values('$u_id','$name','$l_name','$m_num','$radi','$eml','$pwd','$cpwd','$reg_ip','$code')";
 
      $insrt_run= mysqli_query($conn, $insrt_query);
	  
  //. . . if customer already ip-add store in carts  than check script below. . .. 
      $match_carts = "select * from carts where ip_adrs='$reg_ip'";
   
      $run_query=mysqli_query($conn,$match_carts);
  
                 if(mysqli_num_rows($run_query)>0)
	        
			{
   
      //  .. . . store customer-email in 'session'  according to register table .... . . 
  
             $_SESSION['c_email']=$eml;
			
			  setcookie("ready","1",time()+(30*24*60*60));
       
	     echo "<script>window.open('checkout.php','_self')</script>";
             }
			 
     else{
 
 echo "<script>window.open('index.php','_self')</script>";
 
       }
    /* if($insrt_run){
           
		   header("location:ragister.php?success=101");

                  }
    
	 else
	    {
       header("location:ragister.php?failed=404");

        }*/

}






?>