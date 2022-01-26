<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo;?></title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL; ?>css/style.css">
</head>
<body>
    

<header>
    <div class="center">
        <div class="logo">
            <h2>Projeto MVC</h2>
        </div><!--logo-->

        <nav class="menu">
            <?php
                foreach ($this->menuItems as $key => $value) {
                  echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';     
                }
            ?>
        </nav><!--menu-->
        <div class="clear"></div>
    </div><!--center-->
</header>