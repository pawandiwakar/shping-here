<?php
include "include/db.php";

$sele_query="select * from products"; 
 
 $run_sele= mysqli_query($conn,$sele_query)
 
 while($row=mysqli_fetch_array($run_sele)){
  $p_id= $row['p_id'];
  $p_nmae= $row['p_name'];
  $price= $row['price'];
  $brand= $row['brand'];
  $dsic_price= $row['discount_price'];
 $discrip=$row['discrip'];
 $p_sku=$row['p_sku'];
 $p_title=$row['p_title'];
 $img=$row['image'];
 
 
}



?>