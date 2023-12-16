<?php
if ($_SESSION["loggedin"] != true)
{
    header("Location: index.php");
}

if (isset($_POST['placeorder'])) 
{
    header('Location: index.php?page=placeorder');
    exit;
}
function strip_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?=shop_header("Payment Information")?>

<script>
	
function only_has_numbers(str) {
	return(/^\d+$/.test(str));
}   


function validate_form() {
  let first_name = document.forms["payment-info"]["first_name"].value;
  if (first_name == "") {
    alert("Name must be filled out");
    return false;
  }
  let last_name = document.forms["payment-info"]["last_name"].value;
  if (last_name == "") {
    alert("Last name must be filled out");
    return false;
  }
  let payer_email = document.forms["payment-info"]["payer_email"].value;
  if (payer_email == "") {
    alert("Email address must be filled out");
    return false;
  }
  let address_street = document.forms["payment-info"]["address_street"].value;
  if (address_street == "") {
    alert("Street must be filled out");
    return false;
  }
  let address_city = document.forms["payment-info"]["address_city"].value;
  if (address_city == "") {
    alert("City must be filled out");
    return false;
  }
  let address_state = document.forms["payment-info"]["address_state"].value;
  if (address_state == "") {
    alert("State must be filled out");
    return false;
  }
  let address_zip = document.forms["payment-info"]["address_zip"].value;
  if (address_zip == "") {
    alert("ZIP must be filled out");
    return false;
  }
  if (!only_has_numbers(address_zip)) {
	alert("ZIP must only contain numbers");
	return false;
  }
  let address_country = document.forms["payment-info"]["address_country"].value;
  if (address_country == "") {
    alert("Country name must be filled out");
    return false;
  }
}
</script>

<html>
	<head>
		<meta charset="utf-8">
		<title>Payment Information</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Payment Information</h1>
			<form name="payment-info" action="index.php?page=placeorder" method="post" onsubmit="return validate_form()">
                <input type="text" name="first_name" placeholder="First Name" id="first_name" >
                <input type="text" name="last_name" placeholder="Last Name" id="last_name" >
				<input type="text" name="payer_email" placeholder="Email Address" id="email" >
                <input type="text" name="address_street" placeholder="Address Street" id="address_street" >
                <input type="text" name="address_city" placeholder="Address City" id="address_city" >
                <input type="text" name="address_state" placeholder="Address State" id="address_state" >
                <input type="text" name="address_zip" placeholder="Address ZIP Code" id="address_zip" >
                <input type="text" name="address_country" placeholder="Address Country" id="address_country" >
				<input type="submit" value="Confirm" name="placeorder">
			</form>
		</div>
	</body>
</html>

<?=shop_footer()?>

