<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>product form</title>
<link  rel="stylesheet" type="text/css" href="css/proform.css">
</head>

<body>
<div id="body_section">
<div id="in_product_section">
<div id= "in_heading">
<p> All Product Insert</p>
<p id ="back"><a href="index.php">Back to home</a></p>




</div>


<div id= "pro_form">
<div id="pro_form1">

<form method= "post" action="product_in.php" enctype="multipart/form-data">

<p><input type ="text" name="p_name" placeholder="product name here" required></p>

<p><input type ="text" name="price" placeholder="price here" required></p>

<p><input type ="text" name="brand" placeholder="brand here" required></p>

<p><input type ="text" name="discount_price" placeholder="discount price here" required></p>

<p><input type ="text" name="discription" placeholder="discription here" required></p>

<p><input type ="text" name="p_sku" placeholder="sku here" required></p>

<p> <select name="categories" id="select"><option>select categories</option><option>electronnics</option> <option>mobile</option> <option>games</option> <option>cloths</option> <option>jeans & t-shirt</option> <option>electronnics</option></select></p>

<p><input type ="text" name="title" placeholder="title name here" required></p>

<p><input type ="text" name="qntty" placeholder="quantity here" required></p>

<p><input type ="file" name="file" value="choose file" required></p>

<p><input type ="file" name="files" value="choose file1" required></p>

<p><input type ="file" name="filess" value="choose file2" required></p>

<p><input type = "submit" name="subs" value="insert" ></p>

</form>
  </div>
  
    </div>




        </div>




          </div>





  </body>
</html>
