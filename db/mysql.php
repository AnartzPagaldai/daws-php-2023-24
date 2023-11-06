<?php
function select($strStatement, $array = NULL) {
    $db = connect("127.0.0.1","bd1", "root", "");
    $st = $db->prepare($strStatement);
    $st->execute($array);
    return $st->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
}

function executeSatement($strStatement, $array = NULL) {
    $db = connect("127.0.0.1","bd1", "root", "");
    $st = $db->prepare($strStatement);
    $result = $st->execute($array); // si el false $st->errorInfo()[2] 
    $db = null;
    return $result;
}

function connect($host, $dbname, $user, $pass){
    try {
        $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}