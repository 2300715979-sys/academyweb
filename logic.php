<?php
require "connect.php";

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $email = $_POST['emai'];
    $password = $_POST['pass'];

    // Use prepared statements for security
    $stmt = $conn->prepare("SELECT * FROM enters WHERE user = ? AND emai = ? AND pass = ?");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['user'] = $username;

        header("Location: home.php");
        exit();
    } else {
        echo '<script>
            alert("Account not found register if you dont have account");
            window.location.href = "signup.php";
        </script>';
    }
}
?>

