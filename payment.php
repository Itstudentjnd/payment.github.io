<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $price = $_POST['price'];

    $api_key = "rzp_test_IbGu7kQOxCMOhg";

    // Generate a random static ID
    $id = uniqid('order_', true);
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $api_key ?>" 
    data-amount="<?php echo $price * 100; ?>" 
    data-currency="INR"
    data-id="<?php echo $id; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Shri Hari Tech"
    data-description="This is a test payment integration"
    data-image="https://pallutradex.com/img/logo1.png"
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    data-prefill.contact="<?php echo $mno; ?>"
    data-theme.color="#007bff"
></script>
<input type="hidden" name="generated_id" value="<?php echo $id; ?>" />
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>

<style>
    .razorpay-payment-button {display: none;}
</style>

<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>
</body>
</html>
