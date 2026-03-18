<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Knjige</h2>
<a href="index.php?action=create" class="btn btn-success mb-3">Dodaj knjigu</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Naslov</th>
    <th>Autor</th>
    <th>Kategorija</th>
    <th>Akcije</th>
</tr>

<?php while($row = $books->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['title'] ?></td>
    <td><?= $row['author'] ?></td>
    <td><?= $row['category_name'] ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning">Uredi</a>
        <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Da li si sigurna?')" class="btn btn-danger">Obriši</a>
    </td>
</tr>
<?php endwhile; ?>

</table>
</body>
</html>
