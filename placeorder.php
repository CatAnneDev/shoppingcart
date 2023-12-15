<?php
if ($_SESSION["loggedin"] != true)
{
    header("Location: index.php");
}

?>

<?=shop_header("Place Order")?>

<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us! We'll contact you by email with your order details.</p>
</div>

<?=shop_footer()?>