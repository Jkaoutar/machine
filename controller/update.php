<?php
    require_once "../model/db.php";
    $idUpdate=$_GET['id'];
   
    if(!empty($_GET['id'])){
       
        $statement = $pdo->prepare("SELECT * FROM machines where id=:idUpdate");
        $statement->bindValue(':idUpdate',$idUpdate);
        $statement->execute();
        $machines = $statement->fetch(PDO::FETCH_ASSOC);

        $machineId=$machines['machineId'];
        $name=$machines['name'];
        $plant=$machines['plants'];
        $status=$machines['status'];
    }
    if(isset($_POST['add'])){
        $machineId=$_POST['machine'];
        $name=$_POST['name'];
        $plant=$_POST['plant'];
        $status=$_POST['status'];
    $insert = $pdo->prepare("UPDATE  machines 
                            SET machineId = :machineID ,name = :name,plants = :plant,status = :status
                            where id=$idUpdate
                   ");
    $insert->bindValue(':machineID',$machineId);
    $insert->bindValue(':name',$name);
    $insert->bindValue(':plant',$plant);
    $insert->bindValue(':status',$status);
    $insert->execute();
    header('Location: ../index.php');
    }
?>