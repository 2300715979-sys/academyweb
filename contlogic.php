<?php
require "connect.php";
// get data from my form
$username = $_POST['user'];
$email = $_POST['emai'];
$subject = $_POST['sub'];
$message = $_POST['mess'];

// add data to the data base
$sql = "INSERT INTO cont(user, emai, sub, mess)VALUES ('$username','$email','$subject','$message')";

if($conn->query($sql) === True){
    echo '<script>
            alert("data successful");
            window.location.href = "contact us.php";
        </script>';
} else {
    echo "failed to add";

}

?>