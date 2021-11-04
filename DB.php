<?php
$conn = new PDO('mysql:host=localhost;dbname=comp','root', '');

function getCats($conn){
    $sql = $conn->prepare("SELECT * FROM cats;");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);
}

function saveCat($conn){
    $name = $_POST['name'];
    $color = $_POST['color'];
    $birth_date = $_POST['birth_date'];
    $description = $_POST['description'];
    $is_male = $_POST['is_male'] ?? 0;
    if($name && $color && $birth_date && $description && $is_male){
        $values = "'$name', '$color', '$birth_date', '$is_male', '$description'";
        $sql = $conn->prepare("INSERT INTO cats (name, color, birth_date, is_male,description) VALUES ($values)");
        $sql->execute();
    } else {
        $errors = [];
        if(!$name){
            $errors['name'] = 'Name is required';
        }
        if(!$color){
            $errors['color'] = 'Color is required';
        }
        if(!$birth_date){
            $errors['birth_date'] = 'Birthdate is required';
        }
        if(!$description){
            $errors['description'] = 'Description is required';
        }
        $_SESSION['errors'] = $errors;
        header('Location: /v6istlus/admin.php');
    }
}