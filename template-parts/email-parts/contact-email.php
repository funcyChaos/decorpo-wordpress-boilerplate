<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php
			foreach($sanitized_data as $key => $value){
				$key = str_replace("_", " ", $key);
				switch($key){
					case 'quote first name':
						echo '<p>First Name: '.$value.'</p>';
						break;
					case 'quote last name':
						echo '<p>Last Name: '.$value.'</p>';
						break;
					case 'quote phone number':
						echo '<p>Phone Number: '.$value.'</p>';
						break;
					case 'quote email':
						echo '<p>Email Address: '.$value.'</p>';
						break;
					case 'quote description':
						echo '<p>Description: '.$value.'</p>';
						break;
					case 'quote zip code':
						echo '<p>Zip Code: '.$value.'</p>';
						break;
					case 'g-recaptcha-response':
						break;
					default:
						echo '<p>No Data</p>';
						break;
				}
			}

			// foreach($sanitized_data as $key => $value){
			// 	$key = str_replace("_", " ", $key);
			// 	if($key = 'quote first name'){
			// 		echo '<p>'.$value.'</p>';
			// 	}
			// 	echo ucwords($key) . ": ";
			// 	if($key == "date start request" || $key == "date end request"){
			// 		$value = date("m-d-Y", strtotime($value));
			// 	}
			// 	if($value == 1 || $value == 0)$value = $value == 1 ? "Yes" : "No";
			// 	if($value == 3 || $value == 2)$value = $value == 3 ? "Rental" : "Purchase";
			// 	if($value == 5)$value = "Lane Closure";
			// 	if($value == 6)$value = "Shoulder Closure";
			// 	if($value == 7)$value = "Flagging";
			// 	if($value == 8)$value = "Mobile";
			// 	if($value == 4)$value = ""; 
			// 	echo stripslashes($value);
			// 	echo "<br>";
			// }
		?>
	</body>
</html>