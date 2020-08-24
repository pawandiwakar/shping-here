<?php  
include "include/db.php";

?>


<?php 


if(isset($_GET['crt'])){


$get_cart = $_GET['crt'];


$qury = "select * from products where p_id=$get_cart";
 
  $run = mysqli_query($conn,$qury);
  
while($rows = mysqli_fetch_array($run))
{
$p_id = $rows['p_id'];
  $p_nmae = $rows['p_name'];
  $price = $rows['price'];
  $brand = $rows['brand'];
  $dsic_price = $rows['discount_price'];
 $discrip = $rows['discrip'];
 $p_sku = $rows['p_sku'];
 $p_title = $rows['p_title'];
 $img = $rows['image'];
 
?>
<div class="adderproduct">



<div class="first-cart">




<img src="images/<?php  echo $img; ?>" width="100" height="100" class="produtc-image">

</div>

<div class="first-cart">
<h1 class="elsry">Electronic product<?php   echo $p_nmae; ?></h1>
<p class="produ-code">Product code :<?php   echo $img; ?></p>
<p class="produ-code">Brand <?php   echo $brand; ?></p>
<p class="produ-code">Description:<?php   echo $discrip; ?></p>
<p class="produ-code">Pice: Rs.<?php   echo $price; ?></p>
<p class="produ-code">Discounted Pice: Rs.<?php   echo $dsic_price; ?></p><br>
<p class="add-cart"><b>
	<a href="cart-added.php?copy='<?php   echo $p_id; ?>'">
		<input type="button" name="add-to-cart" value="Add to Cart Now" class="nower">
	</a></b>
</p><br>
<span class="img">
<img src="images/f.png" class="face">
<img src="images/t.png" class="face">
<img src="images/in.png" class="face">
<img src="images/g.png" class="face">
</span><br>
<p class="print"><input type="button" name="add-to-cart" value="Add to wishlist"
 class="nower"></p>
<p class="print"><input type="button" name="print" value="print"
 class="nower"></p>
</div>
<?php 
 }
} 

?>



</div>


<h1 class="product-descrip">Product Description</h1>













