<?php
if ($_SESSION["loggedin"] != true)
{
    header("Location: index.php");
}

$payment_total = $_SESSION["subtotal_with_taxes"];
$stmt = $pdo->prepare("INSERT INTO transactions VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute([
    NULL,
    $payment_total,
    date('Y-m-d H:i:s'),
    $_POST['payer_email'],
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['address_street'],
    $_POST['address_city'],
    $_POST['address_state'],
    $_POST['address_zip'],
    $_POST['address_country']
]);

$cookie_name = "has_shopped_with_us";
$cookie_value = True;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<?=shop_header("Place Order")?>

<div class="cart content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us! We'll contact you at <?=$_POST['payer_email']?> with your order details.</p>
    <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Payment Total</td>
                    <td colspan="2">Date</td>
                </tr>
            </thead>
            <tbody>
                    <td><?=$_POST['first_name']?></td>
                    <td><?=$_POST['last_name']?></td>
                    <td><?=$payment_total?></td>
                    <td colspan="2"><?=date('Y-m-d H:i:s')?></td>
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
                    <td><?=$_POST['address_street']?></td>
                    <td><?=$_POST['address_city']?></td>
                    <td><?=$_POST['address_state']?></td>
                    <td><?=$_POST['address_zip']?></td>
                    <td><?=$_POST['address_country']?></td>
            </tbody>
        </table>
</div>

<?=shop_footer()?>