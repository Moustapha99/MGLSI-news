
<body>
    
    <?php include 'connexion.php'; include 'header.php';

    error_reporting(0);
    $id = $_GET['id'];

    if( isset($id) ) {
        $sql = "SELECT titre, contenu FROM article where categorie = $id";
    }
    else {
        $sql = "SELECT titre, contenu FROM article";
    }

        $result = mysqli_query($mysqli, $sql);?>

    <div id="article"><?php	
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
            <div class="article">
                <h1>    <?php echo utf8_encode($row['titre']);?></h1>
                <p> <?php echo utf8_encode($row['contenu']);?></p>
            </div>
            <?php }
            }
            else {
            echo "0 results";
        }?></div>
</body>
</html>