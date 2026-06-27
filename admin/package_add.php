<?php

require '../includes/database.php';

if($_POST)
{

$stmt=$pdo->prepare(

"INSERT INTO packages

(name,duration_days,price)

VALUES(?,?,?)"

);

$stmt->execute([

$_POST['name'],

$_POST['days'],

$_POST['price']

]);

header(

'Location:packages.php'

);

exit();

}

?>

<form method="post">

<input name="name">

<input name="days">

<input name="price">

<button>

Create

</button>

</form>
