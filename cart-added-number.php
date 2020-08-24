 
<div class="sectionrty">


<h1 class="scatping">Shopping Cart</h1>
<p class="basket">Product has been added to your Shopping Basket. </p>


<table width="80%" border="1">
	
	
	
	
	<tr>
	    <td>SN.</td>
		<td>PRODUCTS</td>
		<td>QUANTITY</td>
		<td>AMOUNT</td>
	</tr>



	
	<?php
	
//   . .creating price,totel-price and all product script fetched... b/w  relation product-table and cart-table ..  . .. .
     
	 
	  //include "function/function.php";
      
	  $result=0;
  
        $ip_adrs = getRealIpAddr();

        $price_tbl="select * from carts where ip_adrs='$ip_adrs'";

        $price_cart = mysqli_query( $conn,$price_tbl);

       while($fetch_id=mysqli_fetch_array($price_cart))
	   {
  
          $get_id=$fetch_id['c_id'];
  
       $query_price="select * from products where p_id='$get_id'";
 
       $price_run = mysqli_query( $conn,$query_price);
 
      while($get_price=mysqli_fetch_array($price_run))
      
	    {
      
	 	$sum = array($get_price['price']);
	  
	     $all_sum = array_sum($sum);
	
	     $result+=$all_sum;

 $only_price = $get_price['price'];
 $only_name = $get_price['p_name'];
 $only_img = $get_price['image'];
  $only_id = $get_price['p_id'];
 
 
 

  
       ?>



    <tr>
		<td>1</td>
		<td><img src="images/<?php echo  $only_img;  ?>" width="100" height="100" class="prover">
			<span class="test-product">
			<b> <?php echo $only_name; ?></b>
<p><b>Product Code</b> : tp003</p>
<p>Price: ₹ <?php echo   $only_price;  ?></p>
</span>
		</td>
		
		<td>
		
<!--  . . .start upadate quantity form . . .. -->		
		
		
		
			<form action="cart-added.php" method="post">
			   
			   <p class="add"><input type="text" name="sent_qnty" value="1" size="1"></p>
			   
			   <p class="updte"><input type="submit" name="update" value="update"  ></p>
            
			</form>





<p class="remove"><a href="cart-added.php?dlt=<?php echo  $only_id;  ?>"> Remove </a></p>
		</td>
		<?php    

   //  . .. starting updating query to quantity.  .. . . .. . .


if(isset($_POST['update']))
{

   $add_qnty=$_POST['sent_qnty'];
  
   //$ip = getRealIpAddr(); 
  
   $udt_qnty_query="update carts set qnty = '$add_qnty' where ip_adrs='$ip_adrs'";
  
   $run_qnty=mysqli_query($conn,$udt_qnty_query);
  
   $result= $result*$add_qnty;
  
   if($run_qnty)
             
			  {
  
                 echo "<script>window.open('cart-added.php','_self')</script>";
              
			  }

}


?>
	


		<td><b>RS.<?php echo   $only_price;  ?>.00</b></td>
	</tr>

<?php 
}
   }
?>

<tr>
<td colspan="7" align="right">

	<p>Sub Total : <?php echo  $result;  ?></p>
    <p>Estimated Total : ₹ 228.00</p>

</td>


</tr>


<tr>
	
	<td colspan="7" align="right">
	
	


	
	
		<input type="button" name="cart" value="< clear cart" class="clear-cart">
<input type="button" name="cart" value="< continue Shopping" class="clear-cart">
	<input type="button" name="cart" value="Proceed to payment >" class="proceed-payment">
	
	
		<a href="checkout.php"><input type="button" name="cart" value="Guest checkout >" class="proceed-payment"></a>

	</td>

</tr>

</table>


</div>