<?php

function SELECTSTMT($conn, $tbcol, $tb) {
    $sql = "SELECT $tbcol FROM $tb";
    $stmt = $conn -> query($sql);
    $return = $stmt -> fetch_all(MYSQLI_ASSOC);;
    return $return;
}

function SELECTCNDTNSTMT($conn, $tbcol, $tb, $con) {
    $sql = "SELECT $tbcol FROM $tb WHERE $con";
    $stmt = $conn -> query($sql);
    $return = $stmt -> fetch_all(MYSQLI_ASSOC);;
    return $return;
}

?>