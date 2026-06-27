<?php

function addNotification(

$pdo,

$user,

$message

)

{

$stmt=$pdo->prepare(

"

INSERT INTO notifications

(

user_id,

message

)

VALUES(

?,?

)

"

);


$stmt->execute([


$user,


$message


]);

}

?>
