<?php
include "include/db.php";

if(isset($_POST['subt'])){

$uid=uniqid();
$fname=$_POST['n'];
$lname=$_POST['l_n'];
$m_n=$_POST['m_n'];
$el=$_POST['el'];
$enqr=$_POST['enqr'];
$e_code=$_POST['e_code'];
 
  $insert_query="insert into  contacts(u_id,f_name,l_name,m_num,email,enquiry,e_code) values('$uid','$fname','$lname','$m_n','$el','$enqr','$e_code')";
 
 $insert_run= mysqli_query($conn,$insert_query);
 
     if( $insert_run){
           
		   header("location:contact.php?success=101");

                  }
    
	 else
	    {
       header("location:contact.php?failed=404");

        }

}






?>