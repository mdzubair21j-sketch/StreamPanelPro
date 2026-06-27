<?php

require '../includes/database.php';

$tickets=$pdo->query(

"SELECT *

FROM tickets

ORDER BY id DESC"

)->fetchAll();

?>

<h1>

Tickets

</h1>

<table border="1">

<tr>

<th>ID</th>

<th>Subject</th>

<th>Status</th>

</tr>

<?php foreach($tickets as $t): ?>

<tr>

<td><?=$t['id']?></td>

<td><?=$t['subject']?></td>

<td><?=$t['status']?></td>

</tr>

<?php endforeach; ?>

</table>
