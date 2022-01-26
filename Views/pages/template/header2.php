<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL; ?>css/style.css">
</head>
<body>
    
<?php
    foreach ($this->menuItems as $key => $value) {
        echo $value;
        echo '</br>';
    }
?>