<span class="deal">

ELECTRONICS
</span>
<br>



<div class="allproducts">

	<?php
	   

include "include/db.php";

$sele_query="select * from products order by rand() LIMIT 0,5"; 
 
 $run_sele= mysqli_query($conn,$sele_query);
 
 while($row=mysqli_fetch_array($run_sele))
 {
   $p_id= $row['p_id'];
  $p_nmae= $row['p_name'];
  $price= $row['price'];
  $brand= $row['brand'];
  $dsic_price= $row['discount_price'];
 $discrip=$row['discrip'];
 $p_sku=$row['p_sku'];
 $p_title=$row['p_title'];
 $img=$row['image'];
 
 



/*$a=1;
while ($a<=5)
{
	*/?>



	


<div class="singleproduct">
<a href="cart.php?crt='<?php echo $p_id; ?>'"><img src="images/<?php echo $img; ?>" width="100" height="100" class="electronic"></a>
<p class="product"><?php echo $p_nmae; ?></p><br>
<p class="price"><?php echo $brand; ?></p>
<p class="price">Rs.<?php echo $price; ?></p><br>
<p class="ptry">Offer price.<?php echo $dsic_price; ?></p><a href="cart-added.php?copy='<?php echo $p_id; ?>'"><span class="view">Add to card</span></a>

</div>
<?php // $a++; 

  }

   ?>

</div>
<span class="deal">

Women's watches: 30% - 70% off 
</span>


<br>



<div class="allproducts">

	<?php
$a=1;
while ($a<=5)
{
	?>

<div class="singleproduct">
<img src="images/Portronics-Muffs-Pro-Over-Ear-SDL446215776-1-9f0e0.png" class="electronic">
<p class="product">Portronics Muffs Pro Over Ear Wireless Headphones With Mic</p><br>
<p class="price">Brand</p>
<p class="price">Rs.1599</p><br>
<p class="ptry">Discounted price</p><span class="view">VIEW DETAILS</span>

</div>

<?php $a++; }?>
</div>
<span class="deal">

Women's watches: 30% - 70% off 
</span>
<div class="allproducts">

	<?php
$a=1;
while ($a<=5)
{
	?>

<div class="singleproduct">
<img src="images/Portronics-Muffs-Pro-Over-Ear-SDL446215776-1-9f0e0.png" class="electronic">
<p class="product">Portronics Muffs Pro Over Ear Wireless Headphones With Mic</p><br>
<p class="price">Brand</p>
<p class="price">Rs.1599</p><br>
<p class="ptry">Discounted price</p><span class="view">VIEW DETAILS</span>
</div>

<?php $a++; }?>
</div>



















