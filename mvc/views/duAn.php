<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án</title>
    <style>
        div{
            justify-content:center;
        }
    </style>
</head>
<body style="background-color:rgba(0, 0, 0, 0.7);">
    <div class="header">
    <?php
        include_once("./header.php");
    ?>
    </div>

    <div class="content">
    <?php
        include_once("./chiTietDuAn.php");
    ?>
    </div>

    <div class="footer">
    <?php
        include_once("./footer.php");
    ?>
    </div>
</body>
</html>
