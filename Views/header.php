<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Du Polytechnicien</title>
        <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <div id="header">
        <a href="index.php" style="text-decoration: none; color: #264653;">
            <h1>News Du Polytechnicien</h1>
        </a>
    </div>
    <div id="navbar">
        <? foreach($categories as $category) { ?>
            <ul>
                <li onclick="window.location.href='?id=<?=$row['id']?>'">
                    <?php echo utf8_encode($category['libelle']);?>
                </li>
            </ul>
            <? require('views/navbar.php'); ?>
        <?php } ?>
    </div>
</body>
</html>

