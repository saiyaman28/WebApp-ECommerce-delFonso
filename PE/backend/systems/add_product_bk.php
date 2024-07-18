<?php require_once "../database/database.php"; require_once "../database/sql_commands.php"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);

    $sql = "INSERT INTO products (name,description,price) VALUES ('$name', '$description', $price)";
    $conn -> query($sql);

    header("location: ../../templates/pages/index.php");

}

?>