<?php
if ($_SESSION["loggedin"] != true)
{
    header("Location: index.php");
}

$DATABASE_HOST = "localhost";
$DATABASE_USERNAME = "root";
$DATABASE_PASSWORD = "";
$DATABASE_NAME = "shoppingcart";

// if there is error with connection, exit and display error
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_NAME);
if ( mysqli_connect_errno() ) 
{
	exit("Failed to connect to MySQL: " . mysqli_connect_error());
}


$sql_query = "SELECT id, payment_amount, created, payer_email, first_name, last_name, address_street, address_city, address_state, address_zip, address_country FROM transactions";
$result = $conn->query($sql_query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $payment_amount = $row["payment_amount"];
        $created = $row["created"];
        $payer_email = $row["payer_email"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $address_street = $row["address_street"];
        $address_city = $row["address_city"];
        $address_state = $row["address_state"];
        $address_zip = $row["address_zip"];
        $address_country = $row["address_country"];
    }
  } else {
    echo "0 results";
  }

?>

<?=shop_header("Order History")?>

<div class="cart content-wrapper">
    <h1>Order History</h1>
    <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Payment Total</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                    <td><?=$first_name?></td>
                    <td><?=$last_name?></td>
                    <td><?=$payer_email?></td>
                    <td><?=$payment_amount?></td>
                    <td colspan><?=$created?></td>
            </tbody>
            <thead>
                <tr>
                    <td>Address Street</td>
                    <td>City</td>
                    <td>State</td>
                    <td>ZIP</td>
                    <td>Country</td>
                </tr>
            </thead>
            <tbody>
                    <td><?=$address_street?></td>
                    <td><?=$address_city?></td>
                    <td><?=$address_state?></td>
                    <td><?=$address_zip?></td>
                    <td><?=$address_country?></td>
            </tbody>
        </table>
</div>

<?=shop_footer()?>