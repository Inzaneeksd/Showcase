<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: Skal udfyldes og være Avengers
 * nameSearch: Valgfri
 */
header('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Avengers") {
    $sql = "SELECT * FROM film WHERE 1=1";
    $bind = [];

    if(empty($data["nameSearch"])) {
        $sql .= " AND filmNavn = :filmNavn ";
        $bind[":filmNavn"] = $data["nameSearch"];
    }

    $film1 = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($film1);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>