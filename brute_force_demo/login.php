<?php
// The correct username and password
$correct_username = 'admin';
$correct_password = 'password123';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        echo "<h1>Login Successful!</h1>";
    } else {
        echo "Username or Password is wrong";
    }
}
?>
