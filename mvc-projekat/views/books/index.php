<?php include "../views/layout/header.php"; ?>

<a href="index.php?action=create" class="btn btn-primary mb-3">Dodaj knjigu</a>

<table class="table table-striped">
    <tr>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Kategorija</th>
        <th>Akcije</th>
    </tr>

    <?php foreach($books as $b): ?>
    <tr>
        <td><?= $b['title'] ?></td>
        <td><?= $b['author'] ?></td>
        <td><?= $b['category'] ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="index.php?action=delete&id=<?= $b['id'] ?>" 
               class="btn btn-danger btn-sm delete-btn">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include "../views/layout/footer.php"; ?>
