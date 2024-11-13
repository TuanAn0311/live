<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            margin: 5px 0px 5px 0px;
            justify-content: center;
        }
        body{
            background-color: gray;
            display: block;
            align-items: center;
            
        }
        .content{
            display: flex;
            justify-content:center;
        }
        
    </style>

    <title>Job Net</title>
</head>
<body>
    <?php 
    require_once ("./mvc/views/pages/header.php");
    ?>
    <div class="content">
        <?php
        require_once ("./mvc/views/pages/".$data["page2"].".php");
        ?>
    </div>
    <?php
    require_once ("./mvc/views/pages/footer.php");
    
    ?>
</body>
</html>