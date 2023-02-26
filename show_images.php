<style>
    <?php include 'style/main.css';
    require_once 'index.php';
    $image = $_GET['image'];
    ?>
</style>
<form action="index.php?image=<?php echo $image ?>" method="get">
    <div>
        <img src="images/<?= $image ?>" alt="">
        <textarea name="title"></textarea>
        <input type="submit">
    </div>
</form>
