<?php
$negara = ["Indonesia","Singapura","Malaysia","Brunei","Thailand","Laos","Filiphina","Myanmar"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan4b</title>
    </head>
    <body>
    <p>
    <b>Daftar Negara ASEAN Awal : <br></b>
        <?php
        for ($i = 0; $i < 5; $i++){
            echo "<li>$negara[$i]</li>";
        }
        ?>
    </p>
    <p>
    <b>Daftar Negara ASEAN Baru : <br></b>
        <?php
        for ($i = 0; $i < count($negara); $i++){
            echo "<li>$negara[$i]</li>";
        }
        ?>
    </p>  
    </body>
</html>