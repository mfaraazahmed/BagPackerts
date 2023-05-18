<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="parent-container-login">
        <div class="left-side">
            <img src="./images/login.png" alt="image">
        </div>
        <form action="#" method="POST" class="right-side">
            <div class="title">
                Login account
            </div>
            <div class="row">
                <label for="Email">Email address</label>
                <input type="email" name="username" class="col-12" placeholder="example@gmail.com">
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input type="text" name="password" class="col-12" placeholder="Type here">
            </div>
            <div class="row">
                <button class="cta-btn" name="login">Log in</button>
            </div>
        </form>
        
    </div>
</body>
</html>


<?php
include("connection.php");

// Check if login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize the user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Construct the SQL query using prepared statements
    $query = "SELECT * FROM `FORM` WHERE `email` = ? AND `password` = ?";
    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, 'ss', $username, $password);

    // Execute the prepared statement
    mysqli_stmt_execute($statement);

    // Fetch the result
    $result = mysqli_stmt_get_result($statement);

    // Check the number of rows returned
    $total = mysqli_num_rows($result);

    if ($total == 1) {
        // echo "Login Success";
        header('Location: dashboard.php');
        exit;
    } else {
        // echo "Log in Failed";
    }

    // Close the prepared statement
    mysqli_stmt_close($statement);
}

// Close the database connection
mysqli_close($conn);
?>
