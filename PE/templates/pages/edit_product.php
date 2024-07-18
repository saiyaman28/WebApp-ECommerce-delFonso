<?php require_once "../elements/html-top.php"; require_once "../elements/header.html"; ?>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = htmlspecialchars($_POST["id"]);
    
        $results = SELECTCNDTNSTMT($conn, "*", "products", "id = $id");
?>

<?php
foreach ($results as $result) { ?>
<form action="../../backend/systems/edit_product_bk.php" method="POST">
    <input style="display: none;" name="id" value="<?php echo $id?>">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $result["name"]; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">DESCRIPTION</span>
        <input type="text" class="form-control" name="description" id="description" value="<?php echo $result["description"]; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">PRICE</span>
        <input type="number" class="form-control" name="price" id="price" value="<?php echo $result["price"]; ?>">
    </div>
    
    <button class="btn btn-success" type="submit">SUBMIT</button>

</form>

<?php }
} ?>

<?php require_once "../elements/html-bot.html"; require_once "../elements/header.html"; ?>