<form method="POST" action="index.php?action=update" class="container mt-5">

    <input type="hidden" name="id" value="<?= $book['id'] ?>">

    <input type="text" name="title" placeholder="Naslov" class="form-control mb-2" value="<?= $book['title'] ?>" required>
    <input type="text" name="author" placeholder="Autor" class="form-control mb-2" value="<?= $book['author'] ?>" required>

    <select name="category_id" class="form-control mb-2" required>
        <?php foreach($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>" <?= $cat['id']==$book['category_id']?'selected':'' ?>>
                <?= $cat['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button class="btn btn-primary">Sačuvaj promjene</button>

</form>
