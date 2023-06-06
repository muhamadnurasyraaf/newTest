<?php
    require_once 'config.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashedpassword = password_hash($password,PASSWORD_DEFAULT);

        $stmt =  mysqli_query($conn,"INSERT INTO user VALUES('$username','$email','$hashedpassword');");
        if($stmt){
            echo 'success';
        }else{
            echo 'failed';
        }
    }
    


