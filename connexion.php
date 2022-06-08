<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mglsi_news';
        
        $mysqli = mysqli_connect($servername, $username, $password, $dbname);
        if (!$mysqli) {
            die("Echec de la connexion: " . mysqli_connect_error());
        }
    ?>