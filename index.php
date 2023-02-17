<?php
session_start();
$images = [
        'Природа' => '1',
        'Горы' => '2',
        'Море' => '3',
        'Пустыня' => '4',
        'Город' => '5'
] ?>

<?php
if(isset($_POST["click"])) {
    $_SESSION["title"] = $_POST["title"];
}
?>

<?php
if(isset($_POST["click"])) {
    $_SESSION["date"] = date('Y-m-d H:i:s');
}

//if (isset($_POST["click"])){
//    $currentDateTime = new \DateTime();
//    $currentDateTime->setTimezone(new \DateTimeZone('Europe/Moscow'));
//    $_SESSION["date"] = $currentDateTime->format('l-j-M-Y H:i:s A');
//
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
<div class="content">
    <div class="items">
        <?php foreach ($images as $name => $img)
        { ?>
        <div class="items__item">
            <div class="items__image">
                <a href="show_images.php">
                    <img src="images/<?php echo $img  ?>.jpg" alt="">
                </a>
            </div>
            <div class="items__body">
                <h2><?php echo $name?></h2>
                <div class="items__label"><?= $_SESSION["date"] ?></div>
                <div class="items__text">
                    <?= $_SESSION["title"] ?>
                </div>
            </div>
        </div>
        <?php
        } ?>
    </div>
</div>
<script src="js/main.js"></script>
</body>
</html>
