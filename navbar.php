<?php 
    $sql = $pdo -> query ("SELECT * FROM categorie");
    $categories = [];

    while (($row = $sql ->fetch())) {
        $category = [
            'id' => utf8_encode($row['id']),
            'libelle' => utf8_encode($row['libelle'])
        ];
        $categories[] = $category;
    }
?>