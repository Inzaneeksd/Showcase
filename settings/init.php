<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 1){
    $DB_SERVER = "localhost";
    $DB_NAME = "filmarkiv";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "danielmmoller.dk.mysql:3306";
    $DB_NAME = "danielmmoller_dkfilm";
    $DB_USER = "danielmmoller_dkfilm";
    $DB_PASS = "SutDen";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);