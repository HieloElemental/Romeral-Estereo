<?php
function SiteTemplate($title, $content)
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo ASSETS ?>logo.png">
    <title>
        <?php echo $title ?> - Hielo Elemental
    </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo PUBLICDIR ?>css/main.css">
</head>

<body>
    <?php echo $content(); ?>
    <script src="<?php echo PUBLICDIR ?>js/navbar.js"></script>
</body>

</html>
<?php } ?>