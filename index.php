<?php
$images = [
        "<img src='images/5.jpg'>",
        "<img src='images/4.jpg'>",
        "<img src='images/3.jpg'>",
        "<img src='images/2.jpg'>",
        "<img src='images/1.jpg'>"
] ?>

<?php
$title = "";
if(isset($_POST["title"])) {
    $title = $_POST["title"];
}
?>

<?php
$date = "";
if(isset($_POST["click"])) {
    $date = date('Y-m-d H:i:s');
}
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
<div class="container">
    <li>
        <a href="show_images.php"><img src='images/1.jpg'></a>
        <div class="title">
            <h6><?= $date ?></h6>
            <p><?= $title ?></p>
        </div>
    </li>
    <li>
        <a href="show_images.php"><img src='images/2.jpg'></a>
        <div>
            <h6><?= $date ?></h6>
            <p><?= $title ?></p>
        </div>
    </li>
    <li>
        <a href="show_images.php"><img src='images/3.jpg'></a>
        <div>
            <h6><?= $date ?></h6>
            <p><?= $title ?></p>
        </div>
    </li>
    <li>
        <a href="show_images.php"><img src='images/4.jpg'></a>
        <div>
            <h6><?= $date ?></h6>
            <p><?= $title ?></p>
        </div>
    </li>
    <li>
        <a href="show_images.php"><img src='images/5.jpg'></a>
        <div>
            <h6><?= $date ?></h6>
            <p><?= $title ?></p>
        </div>
    </li>
</div>
<script src="js/main.js"></script>
</body>
</html>