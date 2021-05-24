<?php
require_once "model/db.php";
$statement = $pdo->prepare('SELECT * FROM machines ORDER BY id');
$statement->execute();
$machines = $statement->fetchAll(PDO::FETCH_ASSOC);



?>