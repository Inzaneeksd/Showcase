<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO film (filmNavn, filmBeskrivelse) VALUES(:filmNavn, :filmBeskrivelse)";
    $bind = [":filmNavn" => $data["filmNavn"], ":filmBeskrivelse" => $data["filmBeskrivelse"]];

    $db->sql($sql, $bind, false);

    echo "Filmen er nu tilføjet. <a href='insert.php'>Indsæt en film mere</a>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/hlaucnjtm62q2mbwenuj5937m2owjupg7iysmkxfowl2f8z6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6">
            <label for="filmNavn">Film navn</label>
            <input class="form-control" type="text" name="data[filmNavn]" id="filmNavn" placeholder="Film navn" value="">
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="filmBeskrivelse">Film beskrivelse</label>
                <textarea class="form-control" name="data[filmBeskrivelse]" id="filmBeskrivelse"></textarea>
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Tilføj Film</button>
        </div>
    </div>
</form>



<form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
</body>
</html>
