<?php
session_start();
if (!isset($_SESSION["storage"])) {
    $images = array_diff(scandir("images"), ["..", "."]);
    foreach ($images as $key => $image) {
        $_SESSION["storage"][$key] = [
            "image" => $image,
            "date"  => date('d.m.y H:i:s')
        ];
    }
}

if(isset($_GET["title"], $_GET["key"])) {
    $_SESSION["storage"][$_GET['key']]["title"] = $_GET["title"];
    $_SESSION["storage"][$_GET['key']]["date"] = date('d.m.y H:i:s');
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
<div class="content">
    <div class="items">
        <?php foreach ($_SESSION["storage"] as $key => $value) { ?>
        <div class="items__item">
            <div class="items__image">
                <a href="show_images.php?key=<?= $key ?>">
                    <img src="images/<?= $value["image"] ?>" alt="">
                </a>
            </div>
            <div class="items__body">
                <div class="items__label">
                    <?= $value["date"] ?? "-" ?>
                </div>
                <div class="items__text">
                    <?= $value["title"] ?? "-" ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>

