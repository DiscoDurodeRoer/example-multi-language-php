<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiidioma</title>
</head>

<body>

    <?php

    $langs = array("en", "es");
    if (isset($_GET['lang']) && in_array($_GET['lang'], $langs)) {
        require "lang/" . $_GET['lang'] . ".php";
    } else {
        require "lang/es.php";
    }

    ?>



    <h1><?php echo $lang['label.title'] ?></h1>

    <p><?php echo $lang['label.content']; ?></p>



</body>

</html>