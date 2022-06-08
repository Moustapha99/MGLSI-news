<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Du Polytechnicien</title>
        <link rel="stylesheet" href="stylee.css">

</head>
<header>
    <a href="index.php" style="text-decoration: none; color: #264653;">
    <h1>News Du Polytechnicien</h1>
    </a>
</header>
    <div id="navbar">
        <ul>
        <?php
        $sql = "SELECT * FROM categorie";
        $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                
                    <li onclick="window.location.href='?id=<?=$row['id']?>'">
                        <?php echo utf8_encode($row['libelle']);?></li>
                
            <?php }
        }?>

        </ul>
    </div>
