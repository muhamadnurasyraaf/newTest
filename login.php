<?php
    require_once 'config.php';
    session_start();
    if(isset($_POST['Submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = $conn->query("SELECT * FROM user WHERE username = '$username';");
        if($conn->affected_rows > 0){
            $data = mysqli_fetch_assoc($data);
            if(password_verify($password,$data['password'])){
                $_SESSION['username'] = $data['username'];
                header("Location: newpage.php");
            }else{
                echo 'password incorrect';
            }
        }else{
            echo 'username is not available';
        }

    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
        <input type="text" class="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>