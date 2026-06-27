<?php

require '../includes/database.php';

$data=$pdo->query(

"SELECT *

FROM invoices"

)->fetchAll();

?>

<h1>

Invoices

</h1>

<table border="1">

<tr>

<th>ID</th>

<th>Amount</th>

<th>Status</th>

</tr>

<?php foreach($data as $i): ?>

<tr>

<td><?=$i['id']?></td>

<td><?=$i['amount']?></td>

<td><?=$i['status']?></td>

</tr>

<?php endforeach; ?>

</table>
