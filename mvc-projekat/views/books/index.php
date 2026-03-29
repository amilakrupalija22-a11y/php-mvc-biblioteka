<?php include "../views/layout/header.php"; ?>

<h3>Knjige</h3>

<a href="index.php?action=create" class="btn btn-success mb-2">Dodaj knjigu</a>

<input type="text" id="search" class="form-control mb-2" placeholder="Pretraga...">

<table class="table table-bordered table-hover">
<thead>
<tr>
    <th>Naslov</th>
    <th>Autor</th>
    <th>Kategorija</th>
    <th>Akcije</th>
</tr>
</thead>

<tbody>
<?php foreach($books as $b): ?>
<tr>
    <td><?= $b['title'] ?></td>
    <td><?= $b['author'] ?></td>
    <td><?= $b['category'] ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="index.php?action=delete&id=<?= $b['id'] ?>" class="btn btn-danger btn-sm delete-btn">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<?php include "../views/layout/footer.php"; ?>
