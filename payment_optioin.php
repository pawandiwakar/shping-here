  

<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet"  href="css/header.css" type="text/css">
<link rel="stylesheet"  href="css/cart-add.css" type="text/css" >
<link rel="stylesheet"  href="css/foooter.css" type="text/css">
<link rel="stylesheet"  href="css/payment.css" type="text/css">

</head>
<body>

<div class="header">
	<?php 
	
	if(isset($_COOKIE['ready']))
	   {
	include 'head1.php';
	   }
	
	else
	 {
    include 'header.php';
      }
  ?>
</div>
<div class = "payment">

 <?php

      include 'pamnt_optn_page.php';

   ?>

</div>


<div class="section">
	
 <?php

      //include 'cart-added-number.php';

   ?>
    </div>
     <br><br>
    <div class="footer">
   
    <?php
    
	    include 'foooter.php';

      ?>
</div>







</body>
</html>

<?php

// crating insert script in cart table

?>










