
<?php
$conn=mysqli_connect("localhost","root","","shopis");
 
 
 
 function getRealIpAddr()
  {
    if ( !empty( $_SERVER['HTTP_CLIENT_IP'] ) )
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    //to check ip passed from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  } 

     
	 function items()
	 {


if(isset($_GET['copy']))
{

global $conn;
 $ip_adrs = getRealIpAddr();
 
   $cart_tbl="select * from carts where ip_adrs='$ip_adrs'";

   $run_tbl = mysqli_query( $conn,$cart_tbl);
 $count_tbl= mysqli_num_rows( $run_tbl);
 
 }

else{
    

 $ip_adrs = getRealIpAddr();
 
 global $conn;
 
 $cart_tbl="select * from carts where ip_adrs='$ip_adrs'";
 $run_tbl = mysqli_query( $conn,$cart_tbl);
 $count_tbl= mysqli_num_rows( $run_tbl);
 
 }


echo $count_tbl;


    }

// . .. .  fetch totel price from cart table. . . .


    function price()
 {
   //   if(isset($_GET['copy'])
     //{
        global $conn;
        
		


   }



?>