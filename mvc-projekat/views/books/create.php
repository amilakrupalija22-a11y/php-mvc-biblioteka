<?php

?>

<form method="POST" action="index.php?action=store" class="container mt-5">

    <input type="text" name="title" placeholder="Naslov" class="form-control mb-2" required>
    <input type="text" name="author" placeholder="Autor" class="form-control mb-2" required>

    <select name="category_id" class="form-control mb-2" required>
        <option value="">Odaberi kategoriju</option>
        <?php foreach($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <button class="btn btn-primary">Sačuvaj</button>

</form>
