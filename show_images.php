<style>
    <?php include 'style/main.css'; ?>
</style>
<form action="index.php" method="post">
    <div>
        <img src="images/<?php echo $_GET['img']; ?>.jpg" alt="">
        <textarea name="title"></textarea>
        <button name="click" type="submit">Сохранить</button>
    </div>
</form>
