<?php
    require 'database.php';
	
	// fields to validate: name, email, comment
	// check to see if values exist before passing to the validation functions
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
	};
	
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$name = $_POST['name'];
	};
		
	if(isset($_POST['comment']) && !empty($_POST['comment'])){
		$comment = $_POST['comment'];
	};
	
	
	
	// email field validation function
	function email_valid($email) {
		if(is_string($email)){
        $has_at = strpos($email, '@');
        $has_dot = strpos($email, '.');
		if($has_at === false || $has_dot === false){
			return FALSE; // returning FALSE for invalid emails
		} else {
			return TRUE; // returning TRUE for valid emails
		}
		
		
	}
	}
	
	

	
	// activate queries based on booleans? eg "if all 3 are valid then execute query"
		
	// if($email_valid === TRUE && $name_valid === TRUE && $comment_valid === TRUE) {
	if ($email_valid === TRUE){
	// TODO get id to auto increment and auto insert
	$query = "insert into Comments(comments_name, comments_email, comments_detail)
			  values ($c_name, $c_email, $c_detail)";
	
		$comment_accepted = TRUE;
		
	} else {
		$comment_accepted = FALSE;
	}
	

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SmartBrief Exclusives</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!-- start body -->
		<div id="wrapper">
			<div id="header">
				<h1>exclusives</h1>
			</div>

			<div id="navbar">

				<ul>
					<li>
						<a href="productdetail.php?product_id=3">Special Reports</a>
					</li>
					<li>
						<a href="productdetail.php?product_id=2">Dedicated Sends</a>
					</li>
					<li>
						<a href="productdetail.php?product_id=1">Best Of</a>
					</li>
					<li>
						<a href="productdetail.php?product_id=4">Sponsored Feature</a>
					</li>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="contactus.html">Contact Us</a>
					</li>
				</ul>
			</div>

			<div class="contentwrapper">

				<div class="content">
					
					<!-- TODO make first block print if comments are validated and successful -->
					
					<?php echo "<h2 class=\"htag\">Thanks for your feedback</h2>"; ?>
					
					<?php echo "$email"; ?>
					<?php echo "$name"; ?>
					<?php echo "$comment"; ?>
					<?php $tempvar = email_valid($email); ?>
					<?php var_dump($tempvar) ; ?>

					
				</div>

			</div>

		</div>
	</body>
</html>