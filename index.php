<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-top: 100px;
        }

        .container h1 {
            text-align: center;
        }

        .container label {
            display: block;
            margin-top: 10px;
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 3px;
            margin-top: 5px;
        }

        .container span.error {
            color: red;
        }

        .container input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form method="POST" action="signup.php">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="text">Password:</label>
            <input type="text" id="password" name="password" required>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="text" id="confirmPassword" name="confirmPassword" required>
            <input type="submit" name="register" value="Sign Up">
        </form>
    </div>
</body>
</html>
