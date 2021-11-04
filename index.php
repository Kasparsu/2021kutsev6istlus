<?php 
    include('DB.php'); 
    $cats = getCats($conn);
?>
<?php include('partials/header.php') ?>
    Cool cats
    <?php foreach($cats as $cat): ?>
        <div>
            <h1>
                <?=$cat->name?>
            </h1>
            <p><?=$cat->description?></p>
        </div>
    <?php endforeach; ?>   
<?php include('partials/footer.php') ?>

