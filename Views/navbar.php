<?php 
    $sql = $pdo -> query ("SELECT * FROM categorie");
    $categories = [];

    while (($row = $sql ->fetch())) {
        $categories = [
            'id' => utf8_encode($row['id']),
            'libellé' => utf8_encode($row['libelle'])
        ];
        $categories[] = $category;
    }
?>