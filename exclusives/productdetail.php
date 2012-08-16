<?php
    require 'database.php';
	
	// Get product_name
	
	//manually set id for testing
	
	$product_id = $_GET['product_id'];
	if (!isset($product_id)) {
		$product_id = 1;
	}
    
	//manually set id for testing
	//$product_id = 2;
	
	// Overall product info query
	$query = "SELECT * 
			  FROM Product
			  JOIN Price ON Product.id = Price.product_id
			  JOIN ProductDescription ON Product.id = ProductDescription.product_id
			  WHERE Product.id = $product_id";
	$p_info = $db->query($query);
	$p_info = $p_info->fetch();
	$p_name = $p_info['product_name'];
	$p_summary = $p_info['product_summary'];
	$p_detail = $p_info['product_detail'];
	

	// Get prices only by Product.id

	$query2 = "SELECT price_group, price 
		      FROM Price 
		      JOIN Product ON Price.product_id=Product.id
			  WHERE Product.id = $product_id";
			  
	$p_prices = $db->query($query2);
	$p_prices = $p_prices->fetchAll();
	
	// Get images only by Product.id
	
	$query3 = "SELECT url, alt_text, product_id
			   FROM Image
			   JOIN Product on Image.product_id=Product.id
			   WHERE Image.product_id = $product_id";
	$p_images = $db->query($query3);
	$p_images = $p_images->fetch();
	$p_image_url = $p_images['url'];
	$p_image_alt_text = $p_images['alt_text'];
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>SmartBrief Exclusives</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
 <script src="expand.js" type="text/javascript"></script>
</head>
<body>
<!-- start body -->
    <div id="wrapper">
      <div id="header">
      	      <h1>exclusives</h1>
      </div>

      
      <div id="navbar">
      	
      	<ul>
      		<li><a href="productdetail.php?product_id=3">Special Reports</a></li>
      		<li><a href="productdetail.php?product_id=2">Dedicated Sends</a></li>
      		<li><a href="productdetail.php?product_id=1">Best Of</a></li>
      		<li><a href="productdetail.php?product_id=4">Sponsored Feature</a></li>
      		<li><a href="index.html">Home</a></li>
      		<li><a href="contactus.html">Contact Us</a></li>
      	</ul>
      </div>
      
      <!-- BEGIN MAIN CONTENT -->
      <div class="contentwrapper">

        <div class="content">
        	
        	<div class="imagewrapper">
        		<?php echo '<img src="' . $p_image_url . '" alt="' . $p_image_alt_text . '">' ?>
        		
        		
        	</div>
        	
        	<div class="htag">
        	<h2><?php echo $p_name ?></h2>
        	</div>
        	
        
          <p><?php echo $p_summary ?></p>
          <p><?php echo $p_detail ?></p>
          
          <p>
          	Want to learn more? <a href="contactus.html" style="color:blue">Contact our sales team today.</a>
          </p>

      </div>
   
      	<div class="content">
                   <p>Please see the pricing below. Pricing is broadly determined by product groups, our internal categorizations of how valuable our various newletter audiences are. Group A is the least expensive, and Group D is the most expensive.</p>
                   <h6 onclick="showHide">Show/Hide</h6>
          <table>
            <tr>
                <th>Price Group</th>
                <th>Total Cost to Sponsor</th>
            </tr>
            
            <?php foreach ($p_prices as $p) : ?>

            <tr>
                <td><?php echo $p['price_group']; ?></td>
                <td><?php echo '$' . $p['price']; ?></td>
            </tr>
            <?php endforeach; ?>
            
           </table>
           
      </div>

      </div>

    </div>
</body>
</html>
