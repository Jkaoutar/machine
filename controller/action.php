<?php
require_once "model/db.php";
$errors=[];
$machineId='';
$name='';
$plant='';
$status='';

if(isset($_POST['add'])){
    $machineId=$_POST['machine'];
    $name=$_POST['name'];
    $plant=$_POST['plant'];
    $status=$_POST['status'];
   
   
    if(!$machineId){
        $errors[]='machineId is required';
    }
    if(!$name){
        $errors[]='name is required';
    }
    if(!$plant){
        $errors[]='plant is required';
    }
    if(!$status){
        $errors[]='status is required';
    }

    if(empty($errors)){
    $insert = $pdo->prepare("INSERT INTO machines (machineId,name,plants,status) 
                    VALUES (:machineID,:name,:plant,:status)");
    $insert->bindValue(':machineID',$machineId);
    $insert->bindValue(':name',$name);
    $insert->bindValue(':plant',$plant);
    $insert->bindValue(':status',$status);
    $insert->execute();
    }
    $statement = $pdo->prepare('SELECT * FROM machines ORDER BY id');

}
$search = $_GET['search']??'';
if(!empty($_GET['search'])){
    
    $statement = $pdo->prepare("SELECT * FROM machines 
                                WHERE machineId LIKE :search
                                OR name LIKE :search
                                OR plants LIKE :search
                                OR status LIKE :search
                                ORDER BY id");
    $statement->bindValue(':search', "%%$search%");
}
elseif(!empty($_GET['searchPlants'])){
    $search = $_GET['searchPlants']??'';
    $statement = $pdo->prepare("SELECT * FROM machines 
                                WHERE  plants LIKE :search
                                ORDER BY id");
    $statement->bindValue(':search', "%%$search%");
}
elseif(!empty($_GET['searchMachines'])){
    $search = $_GET['searchMachines']??'';
    $statement = $pdo->prepare("SELECT * FROM machines 
                                WHERE  name LIKE :search
                                ORDER BY id");
    $statement->bindValue(':search', "%%$search%");
}
else 
$statement = $pdo->prepare('SELECT * FROM machines ORDER BY id');

$statement->execute();
$machines = $statement->fetchAll(PDO::FETCH_ASSOC);
