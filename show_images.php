<?php
session_start();
//$description = $_SESSION["description"];
//?>
<style>
    <?php include 'style/main.css'; ?>
</style>
<form action="index.php" method="post">
    <div>
        <img src="images/1.jpg" alt="">
        <textarea name="title"></textarea>
        <button name="click" type="submit">Сохранить</button>
    </div>
</form>