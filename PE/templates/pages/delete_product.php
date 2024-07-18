<?php require_once "../elements/html-top.php"; require_once "../elements/header.html"; ?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = htmlspecialchars($_POST["id"]);

        $results = SELECTCNDTNSTMT($conn, "*", "products", "id = $id");
?>
    
<?php
foreach ($results as $result) { ?>
<h5><b>ARE YOU SURE DO YOU WANT TO DELETE?</b></h5><br>

<label for="">
    NAME: <?php echo $result["name"] ?> 
</label> <br>
<label for="">
    DESCRIPTION: <?php echo $result["description"] ?> 
</label> <br>
<label for="">
    PRICE: <?php echo $result["price"] ?>
</label> <br> <br>

<form action="../../backend/systems/delete_product_bk.php" method="POST">
    <input style="display: none;" name="id" id="id" value="<?php echo $id ?>">
    <button class="btn btn-success" type="submit">SUBMIT</button>
</form>

<?php }
} ?>

<?php require_once "../elements/html-bot.html"; require_once "../elements/header.html"; ?>