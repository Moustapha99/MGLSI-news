<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mglsi_news';
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            die("Echec de la connexion: " . $e->getMessage());
        }
    ?>