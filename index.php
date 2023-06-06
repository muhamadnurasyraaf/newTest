<?php
    session_start();
    $_SESSION['id'] = "memang kote";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/Pain-Naruto.jpg" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>
   <div class="navbar">
    <div class="left">
        <p>DocMent</p>
    </div>
    <div class="mid">
       <ul>
        <li><a href="signup.php">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
       </ul>
    </div>
    <div class="right">
        <button class="btn">Hire Me</button>
    </div>
   </div>
   <div class="gridcontainer">
    <div><img src="images/Pain-Naruto.jpg" class="icon"></div>
    <div><img src="images/Pain-Naruto.jpg" class="icon"></div>
    <div><img src="images/Pain-Naruto.jpg" class="icon"></div>
    <div><img src="images/Pain-Naruto.jpg" class="icon"></div>
   </div>

</body>
</html>