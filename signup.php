<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        #dropzone {
            width: 200px;
            height: 200px;
            border: 2px dashed #ccc;
            text-align: center;
            padding: 40px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="parent-container">
        <form action="#" method="POST" enctype="multipart/form-data" class="left-side">
            <div class="title">
                Create an account
            </div>
            <div class="row">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" class="col-12" placeholder="Type here">
            </div>
            <div class="row">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" class="col-12" placeholder="Type here">
            </div>
            <div class="row">
                <label for="Email">Email address</label>
                <input type="email" name="email" class="col-12" placeholder="example@gmail.com">
            </div>
            <div class="row">
                <label for="password">Password</label>
                <input type="password" name="password" class="col-12" placeholder="Type here">
            </div>
            <div class="row">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" class="col-12" placeholder="Type here">
            </div>
            <div class="d-block">
                <label for="avatar">Choose a profile picture:</label>
                <input type="file" id="avatar" name="image" accept="image/png, image/jpeg">
            </div>
            <div class="row">
                <button class="cta-btn" name="register">Register</button>
            </div>
        </form>
        <div class="right-side">
            <img src="./images/backtrans.png" alt="image">
        </div>
    </div>

    <script>
        var dropzone = document.getElementById('dropzone');
        var fileInput = document.getElementById('avatar');

        dropzone.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropzone.style.backgroundColor = '#f7f7f7';
        });

        dropzone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            dropzone.style.backgroundColor = '';
        });

        dropzone.addEventListener('drop', function(e) {
            e.preventDefault();
            dropzone.style.backgroundColor = '';

            var files = e.dataTransfer.files;
            // Assign the dropped file to the file input element
            fileInput.files = files;

            // Perform desired operations with the file
            console.log(fileInput.files[0]);
        });
    </script>
</body>
</html>

<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $targetDirectory = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDirectory . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    // $fileName = $_FILES['file']['name'];
    // $fileType = $_FILES['file']['type'];
    // $fileTmpPath = $_FILES['file']['tmp_name'];


        // Validate form data
        $errors = [];

        if (empty($firstName)) {
            $errors[] = 'First name is required.';
        }
    
        if (empty($lastName)) {
            $errors[] = 'Last name is required.';
        }
    
        if (empty($email)) {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }
    
        if (empty($password)) {
            $errors[] = 'Password is required.';
        }
    
        if ($password !== $confirmPassword) {
            $errors[] = 'Passwords do not match.';
        }
    
        if (empty($fileName)) {
            $errors[] = 'Please upload an image.';
        }
    
        // Check for errors
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } else {
            // All data is valid, proceed with signup and image upload
    
            // Perform necessary database operations (e.g., inserting user data)
    
            // Move uploaded image to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Database connection and insertion
                $conn = mysqli_connect("localhost", "username", "password", "database");
                if ($conn) {
                    $query = "INSERT INTO FORM (firstName, lastName, email, password, confirmPassword, name, type, content) 
                              VALUES ('$firstName', '$lastName', '$email', '$password', '$confirmPassword', '$fileName', '$fileType', '$targetFilePath')";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        echo "Signup successful. Image uploaded.";
                        header('location: index.php');
                    } else {
                        echo "Error inserting data: " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                } else {
                    echo "Failed to connect to the database.";
                }
            } else {
                echo "Signup successful. Failed to upload image.";
            }
        }
    }
    ?>
