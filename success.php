<?php
// success.php

// Access the generated ID
$generated_id = $_POST['generated_id'];

$api_key = "rzp_test_IbGu7kQOxCMOhg";

try {
    $payment_successful = true;
} catch (Exception $e) {
    $payment_successful = false;
    $error_message = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background-color: #333;
            border: none;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .card-text {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .btn-primary, .btn-success, .btn-danger {
            background-color: #28a745;
            border: none;
            font-weight: bold;
        }
        .btn-primary:hover, .btn-success:hover, .btn-danger:hover {
            background-color: #218838;
        }
        .btn-primary:focus, .btn-success:focus, .btn-danger:focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if ($payment_successful): ?>
                    <div class="card text-center">
                        <div class="card-header text-white">
                            Payment Successful
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Thank you for your payment!</h5>
                            <p class="card-text">Your order ID is: <strong><?php echo htmlspecialchars($generated_id); ?></strong></p>
                            <a href="index.php" class="btn btn-primary btn-lg">Go to Homepage</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white">
                            Payment Failed
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">There was an error processing your payment.</h5>
                            <p class="card-text">Error: <strong><?php echo htmlspecialchars($error_message); ?></strong></p>
                            <a href="index.php" class="btn btn-danger btn-lg">Try Again</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
