<html>
<body>
    <div id="article">
        <? foreach($articles as $article) {?>
            <div class="article">
                <h1>    <?php echo $article['titre'];?></h1>
                <p> <?php echo $article['contenu'];?></p>
            </div>
        <? } ?>
    </div>
</body>
</html>