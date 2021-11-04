<?php 
include('partials/session.php');
unset($_SESSION['isLoggedIn']);
header('Location: /v6istlus/');