<?php
include('partials/session.php');
include('DB.php'); 

 if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true){
    header('Location: /v6istlus/login.php');
    die;
 }

saveCat($conn);