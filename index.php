<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #f8f9fa;
        }
        .card {
            background-color: #333;
            border: none;
        }
        .card-header {
            background-color: #007bff;
        }
        .form-control {
            background-color: #555;
            color: #f8f9fa;
            border: 1px solid #007bff;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .futuristic {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 0.1em;
        }
        .navbar-custom {
            background-color: #333;
        }
        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            letter-spacing: 0.1em;
            color: #f8f9fa !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand m-auto" href="#">Shree Hari Tech</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center futuristic">
                        Fill the details
                    </div>
                    <div class="card-body">
                        <form action="payment.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control futuristic" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control futuristic" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="mno">Mobile Number:</label>
                                <input type="text" class="form-control futuristic" id="mno" name="mno" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control futuristic" id="price" name="price" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block futuristic">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
