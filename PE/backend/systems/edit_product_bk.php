<?php require_once "../database/database.php"; require_once "../database/sql_commands.php"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = htmlspecialchars($_POST["id"]);
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);

    $sql = "UPDATE products SET name = '$name', description = '$description', price = $price WHERE id = $id;";
    $conn -> query($sql);

    header("location: ../../templates/pages/index.php");

}

?>