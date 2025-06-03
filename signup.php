<?php
include("relogic.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="lore.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <form action="relogic.php" method="POST">
            <h2>REGISTER</h2>  
            <input type="text" placeholder="Username" required name ="user">
            <input type="email" placeholder="Email" required name="emai">
            <input type="password" placeholder="Password" required name="pass">
            <input type="password" placeholder=" confirm Password" required name="cpass">
            <div class="options">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <input type="submit" id="btn" value="register" name="signup">
            <p>Already  have an account? <a href="index.php">Login</a></p>
            </form>
</div>
    </div>
</body>
</html>