<?php
require "settings/init.php";

$film1 = $db->sql("SELECT * FROM film");
?>

    <!DOCTYPE html>
    <html lang="da">
    <head>
        <meta charset="utf-8">

        <title>Sigende titel</title>

        <meta name="robots" content="All">
        <meta name="author" content="Udgiver">
        <meta name="copyright" content="Information om copyright">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdn.tiny.cloud/1/hlaucnjtm62q2mbwenuj5937m2owjupg7iysmkxfowl2f8z6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    </head>

<body>
<?php

foreach ($film1 as $film){
    ?>

    <div class="row">
        <div class="col-12 col-md-6">
            <?php
            echo $film->filmNavn;
            ?>
        </div>
        <div class="col-12 col-md-6">
            <?php
            echo number_format($film->filmPris, 2, ",", ".") . "<br>";
            ?>
        </div>
    </div>
    <?php
}