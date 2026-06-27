<?php
$search=$_GET['search'] ?? '';

$stmt=$pdo->prepare(

"SELECT *

FROM customers

WHERE fullname LIKE ?

ORDER BY id DESC"

);

$stmt->execute([

"%$search%"

]);

$customers=$stmt->fetchAll();
session_start();

require '../includes/database.php';

$stmt = $pdo->query(
"SELECT * FROM customers ORDER BY id DESC"
);

$customers = $stmt->fetchAll();

?>

<!DOCTYPE html>

<html>

<head>

<title>

Customers

</title>

</head>

<body>

<h1>

Customers

</h1>
<h1>Customers</h1>

<form method="GET">

<input
type="text"
name="search"
placeholder="Search Customer"
value="<?= htmlspecialchars($search) ?>">

<button type="submit">

Search

</button>

</form>

<br>

<a href="customer_add.php">

Add Customer

</a>
<a href="customer_add.php">

Add Customer

</a>

<table border="1">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Status</th>

<th>Expiry</th>

<th>Action</th>

</tr>

<?php foreach($customers as $c): ?>

<tr>

<td><?= $c['id']; ?></td>

<td><?= $c['fullname']; ?></td>

<td><?= $c['email']; ?></td>

<td><?= $c['status']; ?></td>

<td><?= $c['expiry_date']; ?></td>

<td>

<a href="customer_edit.php?id=<?=$c['id']?>">

Edit

</a>

|

<a href="customer_delete.php?id=<?=$c['id']?>">

Delete

</a>

</td>

</tr>

<?php endforeach; ?>

</table>

</body>

</html>
