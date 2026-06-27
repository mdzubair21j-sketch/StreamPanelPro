<?php

require '../includes/database.php';

if($_POST)
{

$stmt=$pdo->prepare(

"INSERT INTO customers
(username,password,fullname,email)

VALUES(?,?,?,?)"

);

$stmt->execute([

$_POST['username'],

password_hash(

$_POST['password'],

PASSWORD_DEFAULT

),

$_POST['fullname'],

$_POST['email']

]);

header(

"Location: customers.php"

);

exit();

}

?>

<form method="post">

<input name="username">

<input name="password">

<input name="fullname">

<input name="email">

<button>

Save

</button>

</form>
