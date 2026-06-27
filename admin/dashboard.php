<?php

require '../includes/database.php';

$totalCustomers=
$pdo->query(

"SELECT COUNT(*)

FROM customers"

)->fetchColumn();



$totalResellers=
$pdo->query(

"SELECT COUNT(*)

FROM resellers"

)->fetchColumn();



$totalPackages=
$pdo->query(

"SELECT COUNT(*)

FROM packages"

)->fetchColumn();

?>

<h1>

Dashboard

</h1>

<p>

Customers :
<?=$totalCustomers?>

</p>


<p>

Resellers :
<?=$totalResellers?>

</p>


<p>

Packages :
<?=$totalPackages?>

</p>
