<?php require_once "../database/database.php"; require_once "../database/sql_commands.php"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = htmlspecialchars($_POST["id"]);

    $sql = "DELETE FROM products WHERE id = $id;";
    $conn -> query($sql);

    header("location: ../../templates/pages/index.php");

}

?>