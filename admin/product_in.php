<?php

include "include/db.php";


if(isset($_POST['subs'])){



 $u_id=uniqid();

$name=$_POST['p_name'];
$price=$_POST['price'];
$brand=$_POST['brand'];
$d_price=$_POST['discount_price'];
$disc=$_POST['discription'];
$p_sku=$_POST['p_sku'];
$cate=$_POST['categories'];
$titl=$_POST['title'];
$qnty=$_POST['qntty'];

// acording to name

$file=$_FILES['file']['name'];
$files=$_FILES['files']['name'];
$filess=$_FILES['filess']['name'];

// acording to name

$tempfile=$_FILES['file']['tmp_name'];
$tempfiles=$_FILES['files']['tmp_name'];
$tempfiless=$_FILES['filess']['tmp_name'];

// start uploading file


move_uploaded_file(images,"$tempfile/$file");
move_uploaded_file(images,"$tempfiles/$files");
move_uploaded_file(images,"$tempfiless/$filess");

$in_query = "insert into  products(p_u_id,p_name,	price,brand,discount_price,discrip,p_sku,categories,p_title,p_quntiy,image,images,imagess) values('$u_id','$name','$price','$brand','$d_price','$disc','$p_sku','$cate','$titl','$qnty','$file','$files','$filess')";
 
 $insrt_query = mysqli_query($conn,$in_query);

 if($insrt_query)
 {
  
  header("location:product_form.php?success=101");

 }
  
  else {
        header("location:product_form.php?failed=404");
      }

 exit();
 }





?>


