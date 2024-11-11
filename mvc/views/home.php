<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            margin: 20px 0px 20px 0px;
        }
        body{
            background-color: gray;
            align-items: center;
            
        }
    </style>
    <title>Job Net</title>
</head>
<body>
    <?php 
    require_once ("./mvc/views/pages/header.php");
    require_once ("./mvc/views/pages/first.php");

    ?>

    <div id="content">
        <?php
            require_once ("./mvc/views/pages/".$data["page1"].".php");
        ?>
    </div>
    <?php
    require_once ("./mvc/views/pages/footer.php");
    
    ?>
</body>
</html>