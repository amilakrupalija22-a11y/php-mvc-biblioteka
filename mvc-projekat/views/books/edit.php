<?php include "../views/layout/header.php"; ?>

<h3>Edit knjige</h3>

<form method="POST">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">

    <input name="title" value="<?= $book['title'] ?>" class="form-control mb-2">
    <input name="author" value="<?= $book['author'] ?>" class="form-control mb-2">

    <select name="category_id" class="form-control mb-2">
        <?php foreach($categories as $c): ?>
            <option value="<?= $c['id'] ?>"
                <?= $c['id'] == $book['category_id'] ? 'selected' : '' ?>>
                <?= $c['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button class="btn btn-primary">Update</button>
</form>

<?php include "../views/layout/footer.php"; ?>
