<?php
include("logic.php")
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
            <form name ="form"action="logic.php" onsubmit="return isvalid()"method="POST">
                <marquee behavior="SCROLL" direction="LEFT"><H2>YOU ARE WELCOME TO BLAIR ACADEMY</H2></marquee>
            <h2>LOGIN</h2>  
            <input type="text" placeholder=" Enter Username"  name="user">
            <input type="email" placeholder="Enter Email"  name="emai" >
            <input type="password" placeholder="Enter Password"  name="pass">
            <div class="options">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <input type="submit" id="btn" value="login" name="submit">
            <p>Don't have an account? <a href="signup.php">Register</a></p>
            </form>
</div>
<script>
    function isvalid(){
        var user = document.form.user.value;
        var emai = document.form.emai.value;
        var pass = document.form.pass.value;
        if(user.length=="" && emai.length=="" && pass.length==""){
            alert("some fields are empty cant login");
            return false
        }
        else{
            if(user.length==""){
            alert("username is empty cant login");
            return false
        }else {
            if(emai.length==""){
            alert("email  is empty cant login");
            return false
        }else{
            if(pass.length==""){
            alert("password is empty cant login");
            return false
        }
    }
}
        }
    }
</script>
    </div>
</body>
</html>