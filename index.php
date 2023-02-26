<?php
session_start();
 $images = array_diff(scandir("images"), ["..", "."]);
//$images = ["1.jpg"]
print_r($images);
$images =  [
    2 => "1.jpg",
    3 => [
        "image" => "2.jpg"
    ],
    4 => [
        "image" => "3.jpg",
        "date" => "12.05.2022",
        "title" => "hello"
    ],
    5 => "4.jpg",
    6 => "5.jpg"
];
if(isset($_GET["title"])) {
    $_SESSION["images"] = $images;
    $_SESSION["images"]["title"] = $_GET["title"];
    $_SESSION["images"]["date"] = date('d.m.y H:i:s'); //, $_GET["date"]);
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
        <?php foreach ($_SESSION["images"] as $img) { ?>
        <div class="items__item">
            <div class="items__image">
                <a href="show_images.php?image=<?php echo $img ?>">
                    <img src="images/<?php echo $img ?>" alt="">
                </a>
            </div>
            <div class="items__body">
                <div class="items__label"><?= $_SESSION["images"]["date"] ?></div>
                <div class="items__text">
                    <?= $_SESSION["images"]["title"] ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
