<?php

require '../includes/database.php';

$data=$pdo->query(

"SELECT * FROM packages"

)->fetchAll();

?>

<h1>

Packages

</h1>

<a href="package_add.php">

Add Package

</a>

<table border="1">

<tr>

<th>Name</th>

<th>Days</th>

<th>Price</th>

</tr>

<?php foreach($data as $p): ?>

<tr>

<td><?=$p['name']?></td>

<td><?=$p['duration_days']?></td>

<td><?=$p['price']?></td>

</tr>

<?php endforeach; ?>

</table>
