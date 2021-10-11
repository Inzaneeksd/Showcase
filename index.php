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

<!--<div class="container">
    <section class="menu">
        <div class="movie-list">
            <div class="movie-group">
                <h2>Movie list:</h2>
                <ul class="movies">
                    <?php foreach ($film1 as $film){ ?>
                        <li>
                            <a href="http://localhost:63342/Showcase/Film.php?id=<?php echo $film->filmId; ?>"> <?php echo $film->filmNavn; ?>  </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
</div> */ -->

<div class="container mt-3 mb-3">
    <div class="row row-cols-5 g-3">
        <?php foreach ($film1 as $film){ ?>
            <div class="card col">
                <a href="/Showcase/Film.php?id=<?php echo $film->filmId; ?>"> <img class="card-img filmbillede" src="<?php echo $film->filmBillede; ?>"> </a>
                <div class="card-img-overlay">
                    <a href="/Showcase/Film.php?id=<?php echo $film->filmId; ?>"> <?php echo $film->filmNavn; ?>  </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>