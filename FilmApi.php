<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: Skal udfyldes og være Avengers
 * nameSearch: Krævet
 * minPrice: Krævet
 * maxPrice: Krævet
 */
header('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Avengers") {
    $sql = "SELECT * FROM film WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])) {
        $sql .= " AND filmNavn = :filmNavn ";
        $bind[":filmNavn"] = $data["nameSearch"];

    } else {
        header("HTTP/1.1 400 Bad Request");
        $error["errorMessage"] = "Filmnavn ikke defineret";
        echo json_encode($error);
    }

    if(!empty($data["minPrice"])) {
        $sql .= " AND filmPris >= :filmPris ";
        $bind[":filmPris"] = $data["minPrice"];

    } else {
        header("HTTP/1.1 400 Bad Request");
        $error["errorMessage"] = "Minimum pris ikke defineret";
        echo json_encode($error);
    }

    if(!empty($data["maxPrice"])) {
        $sql .= " AND filmPris <= :filmPris ";
        $bind[":filmPris"] = $data["maxPrice"];

    } else {
        header("HTTP/1.1 400 Bad Request");
        $error["errorMessage"] = "Maximum pris ikke defineret";
        echo json_encode($error);
    }

    $sql .= " ORDER BY filmId ASC";

    $film1 = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($film1);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>