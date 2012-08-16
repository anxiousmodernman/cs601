<?php
    // require 'database.php';
	
	// fields to validate: name, email, comment
	// check to see if values exist before passing to the validation functions
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		
	
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$name = $_POST['name'];
		
	if(isset($_POST['comment']) && !empty($_POST['comment'])){
		$comment = $_POST['comment'];
	

	
	// email field validation function
	function email_valid($email) {
		if(is_string($email)){
        $has_at = strpos($email, '@');
        $has_dot = strpos($email, '.');
		if($has_at === false || $has_dot === false){
			$email_valid = TRUE;
		} else {
			$email_valid = FALSE;
		}
		return $email_valid;
		
	}
	
	
	
	
	// activate queries based on booleans? eg "if all 3 are valid then execute query"
		
	// if($email_valid === TRUE && $name_valid === TRUE && $comment_valid === TRUE) {
	if ($email_valid === TRUE){
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
			<p>Test data. Delete page after finishing.</p>
			<?php echo $email; ?>
		</div>
	</body>
</html>