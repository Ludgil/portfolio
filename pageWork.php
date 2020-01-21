<?php 
        $imgWork = array('assets/img/photo.jpg', 'assets/img/arrow-up.png');
        $techno=array('bootstrap', 'php');
        $description=array('travail fait en bootstrap', 'travail fait en php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Work - Gilotaux Ludivic</title>
</head>
<body>
    <section id="previewWork">
        <div id="titleWork">
            <h1>My Work</h1>
        </div>
        <div class="flex">
            <div id="miniature-work">
            <?php echo '<img src='.$imgWork[$_GET['index']].'alt="preview-work">';?>
            </div>
            <div id="description-work">
            <?php    echo '<h2>'.$techno[$_GET['index']].'</h2>';?>
            <?php  echo  '<p>'.$description[$_GET['index']].'</p>'; ?>
            </div>
        </div>
    </section>
</body>
</html>