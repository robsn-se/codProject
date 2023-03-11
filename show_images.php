<style>
    <?php include 'style/main.css';
    require_once 'index.php';
    ?>
</style>
<form action="index.php" method="get">
    <div>
        <input type="hidden" name="key" value="<?= $_GET['key'] ?>">
        <img src="images/<?= $_SESSION["storage"][$_GET['key']]["image"] ?>" alt="">
        <textarea name="title"></textarea>
        <input type="submit">
    </div>
</form>