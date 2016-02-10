<!DOCTYPE html>
<html lang="<?=$langCode?>">
<head>
    <meta charset="utf-8">
    <title><?=$formTitle?></title>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <header>
        <?php if ($action == form):?>
            <a href='?controller=user&action=form&lang=english'>Eng</a>|
            <a href='?controller=user&action=form&lang=russian'>Рус</a>
        <?php endif?>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
        (c) Some footer
    </footer>
  <body>
<html>