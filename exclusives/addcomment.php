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
	function email_valid_fun($email) {
		if(is_string($email)){
        	$has_at = strpos($email, '@');
        	$has_dot = strpos($email, '.');
		if($has_at === false || $has_dot === false){
			return FALSE; // returning FALSE for invalid emails
		} else {
			return TRUE; // returning TRUE for valid emails
		}
			
	}
	} // end of email_valid_fun();
	
	function name_valid_fun($name) {
		if(is_string($name)){
			$pattern = '/[^a-zA-Z[:space:]]/';
			$has_weird_char = preg_match($pattern, $name);
		if($has_weird_char === 1){
				return FALSE;
			} else {
				return TRUE;
			}
		}
		
	}
	
	$email_valid = email_valid_fun($email);
	$name_valid = name_valid_fun($name);

	
	// activate queries based on booleans? eg "if both are valid then execute query"
	function comment_accepted_fun($email_valid, $name_valid){
	if ($email_valid === TRUE && $name_valid === TRUE){
	// TODO get id to auto increment and auto insert
		return TRUE;
	} else {
		return FALSE;
	}		
	}

	$comment_accepted = comment_accepted_fun($email_valid, $name_valid);
	
	if($comment_accepted === TRUE){
		$query = "insert into Comments(comments_name, comments_email, comments_detail)
					  values ('$name', '$email', '$comment')";
		$c_insert = $db->query($query); // execute the insert statement and assign the return to $c_insert
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
					
							<?php if($comment_accepted === TRUE){
								echo "<div class=\"htag\"><h2>Thanks for your feedback!</h2></div>";
								echo "<p>Thanks for your comment. Our team will get to your message as soon as possible. Please allow up to 48 hours for a reply.</p>";
							} else {
								echo "<div class=\"htag\"><h2>Oops!</h2></div>";
								echo "<p>Something when wrong with filling out your form. Please <a href=\"contactus.html\">return to the previous page</a> and try again. Be sure to enter a valid name and email address.</p>";
								echo "<p><a href=\"contactus.html\">Please click here to return to the comment form.</a></p>";
							} ?>
					
				</div>

			</div>

		</div>
	</body>
</html>