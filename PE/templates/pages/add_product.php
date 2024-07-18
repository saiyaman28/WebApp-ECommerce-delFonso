<?php require_once "../elements/html-top.php"; require_once "../elements/header.html"; ?>

<form action="../../backend/systems/add_product_bk.php" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">DESCRIPTION</span>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">PRICE</span>
        <input type="number" class="form-control" name="price" id="price">
    </div>
    
    <button class="btn btn-success" type="submit">SUBMIT</button>

</form>

<?php require_once "../elements/html-bot.html"; require_once "../elements/header.html"; ?>