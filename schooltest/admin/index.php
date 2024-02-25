<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.welcome-container {
    max-width: 600px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.welcome-container h1 {
    color: #333;
}

.welcome-container p {
    color: #666;
}

    </style>
</head>
<?php include('header.php'); ?>
<body>
    <div class="welcome-container">
        <h1>Welcome to Admin Dashboard Page</h1>
        <a href="login.php" type="button" class="btn btn-outline-success">Login Now </a>  
    </div>
</body>
</html>
