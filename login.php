<?php include('partials/header.php') ?>


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if($username && $password && $username == 'user' && $password == 'password'){
            $_SESSION['isLoggedIn'] = true;
            header('Location: /v6istlus/admin.php');
        } else {
            $_SESSION['errors']['username'] = 'Wrong username or password';
        }
    }
?>

<form method="POST" action="login.php">
    <i><?= $_SESSION['errors']['username'] ?? '' ?></i>
    <input type="text" name="username" placeholder="username" required>
    <i><?= $_SESSION['errors']['password'] ?? '' ?></i>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit">
</form> 
<?php include('partials/footer.php') ?>
<?php unset($_SESSION['errors']); ?>
