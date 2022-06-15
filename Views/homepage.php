<html>
<body>
    <?php require('header.php');
        foreach($articles as $article) {?>
            <div class="article">
                <h1>    <? echo $article['titre'];?></h1>
                <p> <? echo $article['contenu'];?></p>
            </div>
        <? } ?>
</body>
</html>