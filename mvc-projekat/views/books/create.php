<?php include "../views/layout/header.php"; ?>

<h3>Dodaj knjigu</h3>

<form method="POST">
    <input name="title" class="form-control mb-2" placeholder="Naslov" required>
    <input name="author" class="form-control mb-2" placeholder="Autor" required>

    <select name="category_id" class="form-control mb-2">
        <?php foreach($categories as $c): ?>
            <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <button class="btn btn-success">Spasi</button>
</form>

<?php include "../views/layout/footer.php"; ?>
