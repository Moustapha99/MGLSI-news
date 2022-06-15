
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News Du Polytechnicien</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php include('header.php');
        foreach($articles as $article) {?>
            <div class="article">
                <h1>    <? echo $article['titre'];?></h1>
                <p> <? echo $article['contenu'];?></p>
            </div>
        <? } ?>
</body>
</html>