<?php
include "include/db.php";

if(isset($_POST['sbcrb'])){

$uid=uniqid();

$fname =$_POST['n_name'];

$eml=$_POST['eml'];

$ecode=$_POST['ncode'];

 
  $in_query="insert into news(n_u_id,name,email,code) values('$uid','$fname','$eml','$ecode')";
 
    $in_run= mysqli_query($conn,$in_query);
 
     if($in_run){
           
		   header("location:news.php?success=101");

                  }
    
	 else
	    {
       header("location:news.php?failed=404");

        }

}






?>