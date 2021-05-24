<?php
require_once "../model/db.php";
    $id= $_GET['id']  ?? null;
    if($id == null){
        header('refresh:5;url= ../index.php');
        
    }
    else{

        $delete = $pdo->prepare('DELETE FROM machines where id=:id');
        $delete->bindValue(':id',$id);
        $delete->execute();
        header('Location: ../index.php');

    }

?>