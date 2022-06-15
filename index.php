    <?php require 'connexion.php'; require 'views/header.php';

    error_reporting(0);
    $id = $_GET['id'];

    if( isset($id) ) { //permet de vérifier si l'id est bien défini dans l'url
        $sql = $pdo -> query (
            "SELECT titre, contenu FROM article where categorie = $id"
        );
    }
    else {
        $sql = $pdo -> query (
            "SELECT titre, contenu FROM article"
        );
    }

        // $result = mysqli_query($mysqli, $sql);
        $articles = [];

    while (($row = $sql ->fetch())) {
        $article = [
            'titre' => utf8_encode($row['titre']),
            'contenu' => utf8_encode($row['contenu'])
        ];
        $articles[] = $article;
    }
    require('views/homepage.php');
    ?>

