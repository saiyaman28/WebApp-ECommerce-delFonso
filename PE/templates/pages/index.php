<?php require_once "../elements/html-top.php"; require_once "../elements/header.html"; ?>

<?php 
    $data = SELECTSTMT($conn, '*', 'products');
?>

<form action="add_product.php">
    <button class="btn btn-primary" type="submit">ADD ORDER</button>
</form>

<br>

<table class="table table-bordered">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">PRICE</th>
        <th scope="col" colspan="2">ACTIONS</th>
    </tr>
</thead>
    <tbody>
    <?php 
    foreach ($data as $value) { ?>
        <tr>
            <th scope="row"><?php echo $value['id'] ?></th>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['description'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td>
                <form action="edit_product.php" method="POST">
                    <input style="display: none;" name="id" value="<?php echo $value['id']?>">
                    <button class="btn btn-primary" type="submit">EDIT</button>
                </form>
            </td>
            <td>
                <form action="delete_product.php" method="POST">
                    <input style="display: none;" name="id" id="id" value="<?php echo $value['id'] ?>">
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php require_once "../elements/html-bot.html"; ?>