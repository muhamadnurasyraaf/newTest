<?php
    session_start();
    $id = $_SESSION['id'];
    echo "your username is : " . $id;
