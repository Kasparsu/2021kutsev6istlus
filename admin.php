<?php include('partials/header.php') ?>
<?php 
 if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true){
    header('Location: /v6istlus/login.php');
    die;
 }
?>
<form method="POST" action="addCat.php">
    <i><?= $_SESSION['errors']['name'] ?? '' ?></i>
    <input type="text" name="name" placeholder="name" required maxlength="1024">
    <i><?= $_SESSION['errors']['color'] ?? '' ?></i>
    <input type="text" name="color" placeholder="color" required pattern=".{1,1024}">
    <i><?= $_SESSION['errors']['birth_date'] ?? '' ?></i>
    <input type="date" name="birth_date" required max="<?= date("Y-m-d") ?>">
    <input type="checkbox" name="is_male" value="1">
    <i><?= $_SESSION['errors']['description'] ?? '' ?></i>
    <textarea name="description" placeholder="description" required></textarea>
    <input type="submit">
</form> 
<?php include('partials/footer.php') ?>
<?php unset($_SESSION['errors']); ?>
