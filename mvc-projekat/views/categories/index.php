<?php include "../views/layout/header.php"; ?>

<h3>Kategorije</h3>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Naziv</th>
</tr>

<?php foreach($categories as $c): ?>
<tr>
    <td><?= $c['id'] ?></td>
    <td><?= $c['name'] ?></td>
</tr>
<?php endforeach; ?>

</table>

<?php include "../views/layout/footer.php"; ?>
