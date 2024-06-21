<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Cancer Detection - Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #6c63ff;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #5751d9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Thank you for submitting your skin images!</h1>
        <p>We are currently analyzing your images and will provide you with results shortly.</p>
        <a href="/dashboard" class="btn btn-custom">Go Back</a>
    </div>

    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
