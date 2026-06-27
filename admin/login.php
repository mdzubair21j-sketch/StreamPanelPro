<?php

session_start();

require '../includes/database.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{

$username=$_POST['username'];
$password=$_POST['password'];

$stmt=$pdo->prepare(
"SELECT * FROM admins WHERE username=?"
);

$stmt->execute([$username]);

$user=$stmt->fetch();

if($user &&
password_verify(
$password,
$user['password']
))
{

$_SESSION['admin']=$user['id'];

header(
"Location: dashboard.php"
);

exit();

}

$error="Invalid Login";

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

</head>

<body>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username">

<input
type="password"
name="password"
placeholder="Password">

<button>

Login

</button>

</form>

</body>

</html>
