<?php

require '../includes/database.php';

if($_POST)
{

$stmt=$pdo->prepare(

"INSERT INTO resellers
(username,password,credits)

VALUES(?,?,?)"

);

$stmt->execute([

$_POST['username'],

password_hash(

$_POST['password'],

PASSWORD_DEFAULT

),

$_POST['credits']

]);

header(

'Location:resellers.php'

);

exit();

}

?>

<form method="post">

<input name="username">

<input name="password">

<input name="credits">

<button>

Save

</button>

</form>
