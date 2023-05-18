<?php
include("connection.php");

if(isset($_POST['register'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Perform validation

    $errors = [];

    if(empty($firstName)) {
        $errors['firstName'] = 'First name is required.';
    }

    if(empty($lastName)) {
        $errors['lastName'] = 'Last name is required.';
    }

    if(empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format.';
    }

    if(empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif(strlen($password) < 6) {
        $errors['password'] = 'Password should be at least 6 characters long.';
    }

    if($password !== $confirmPassword) {
        $errors['confirmPassword'] = 'Passwords do not match.';
    }

    // Insert data into the database if there are no errors

    if(empty($errors)) {
        $query = "INSERT INTO FORM (firstName, lastName, email, password, confirmPassword) VALUES ('$firstName', '$lastName', '$email', '$password', '$confirmPassword')";
        $result = mysqli_query($conn, $query);

        if($result) {
            echo "Welcome to The Cure And Care.";
            session_start();
            $_SESSION['username'] = $email;
            header('location: index.php');
            exit;
        } else {
            echo "An error occurred while registering.";
        }
    }
}
?>
