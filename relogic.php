<?php
require "connect.php";

if (isset($_POST['signup'])) {
    $username = $_POST['user'];
    $email = $_POST['emai'];
    $password = $_POST['pass'];
    $cpassword =$_POST['cpass'];

    $sql = "select * from enters where user='$username'";
    $result = mysqli_query($conn,$sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from login where emai='$email'";
    $result = mysqli_query($conn,$sql);
    $count_emai = mysqli_num_rows($result);

    if($count_user == 0 & $count_emai==0){
        if($password==$cpassword){
            // $harsh = md5($password);
            $sql = "INSERT INTO enters(user,emai,pass) VALUES('$username',' $email','$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("Location: index.php");
                exit();
            } else {
                echo '<script>
                    alert("Error occurred while creating your account. Please try again.");
                    window.location.href = "signup.php";
                </script>';
            }
        } else {
            echo '<script>
                alert("Passwords do not match.");
                window.location.href = "signup.php";
            </script>';
        }
    } else {
        $row = $result->fetch_assoc();
        if ($row['user'] === $username) {
            echo '<script>
                alert("Username already exists!");
                window.location.href = "signup.php";
            </script>';
        } elseif ($row['emai'] === $email) {
            echo '<script>
                alert("Email already exists!");
                window.location.href = "signup.php";
            </script>';
        }
    }
}
?>