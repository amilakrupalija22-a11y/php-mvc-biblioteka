<?php

?>
<form method="POST" action="index.php?action=update" class="container mt-5">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">

    <input type="text" name="title" placeholder="Naslov" class="form-control mb-2" 
           value="<?= $book['title'] ?>" required>

    <input type="text" name="author" placeholder="Autor" class="form-control mb-2" 
           value="<?= $book['author'] ?>" required>

    <input type="number" name="category_id" placeholder="Kategorija ID" class="form-control mb-2" 
           value="<?= $book['category_id'] ?>">

    <button class="btn btn-primary">Sačuvaj izmjene</button>
</form>
