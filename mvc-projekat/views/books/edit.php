<?php include "../views/layout/header.php"; ?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">

    <input type="text" name="title" value="<?= $book['title'] ?>" class="form-control mb-2">
    <input type="text" name="author" value="<?= $book['author'] ?>" class="form-control mb-2">
    <input type="number" name="category_id" value="<?= $book['category_id'] ?>" class="form-control mb-2">

    <button class="btn btn-success">Update</button>
</form>

<?php include "../views/layout/footer.php"; ?>
