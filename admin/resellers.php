<?php

require '../includes/database.php';

$resellers=$pdo->query(

"SELECT * FROM resellers"

)->fetchAll();

?>

<h1>

Resellers

</h1>

<a href="reseller_add.php">

Add Reseller

</a>

<table border="1">

<tr>

<th>ID</th>

<th>Username</th>

<th>Credits</th>

<th>Action</th>

</tr>

<?php foreach($resellers as $r): ?>

<tr>

<td><?=$r['id']?></td>

<td><?=$r['username']?></td>

<td><?=$r['credits']?></td>

<td>

<a href="reseller_edit.php?id=<?=$r['id']?>">

Edit

</a>

|

<a href="reseller_delete.php?id=<?=$r['id']?>">

Delete

</a>

</td>

</tr>

<?php endforeach; ?>

</table>
