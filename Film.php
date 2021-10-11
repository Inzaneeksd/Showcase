<?php
require "settings/init.php";

$id = $_GET['id'];
$film1 = $db->sql("SELECT * FROM film WHERE filmId = $id");
?>

    <!DOCTYPE html>
    <html lang="da">
    <head>
        <meta charset="utf-8">

        <title>Spider-Man: Homecoming</title>

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
<div class="container mt-2">
  <div>
    <div class="row">
      <div class="col-md-4">
        <img class="responsive rounded poster" src="<?php echo $film->filmBillede; ?>">
      </div>
      <div class="col-md-5 tekst" >
        <h1>Film</h1>
        <b>Titel:</b> <?php echo $film->filmNavn; ?> <br>
        <b>Pris:</b> <?php echo $film->filmPris; ?> <br><br>
        <h4>Beskrivelse:</h4> <?php echo $film->filmBeskrivelse; ?> <br><br>
      </div>
      <div class="col-md-3"> <a class="btn btn-dark" href="/index.php?"> Tilbage </a> </div>
    </div>
  </div>
    <?php
}
