<?php include "../views/layout/header.php"; ?>

<form method="POST">
    <input type="text" name="title" class="form-control mb-2" placeholder="Naslov" required>
    <input type="text" name="author" class="form-control mb-2" placeholder="Autor" required>
    <input type="number" name="category_id" class="form-control mb-2" placeholder="Category ID">

    <button class="btn btn-success">Spasi</button>
</form>

<?php include "../views/layout/footer.php"; ?>
