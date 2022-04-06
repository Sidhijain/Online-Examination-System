<?php

    include("Dbcon.php");
    $idupdate=$_GET['Qid'];

           $query= "DELETE FROM question WHERE  Qid='$idupdate' " ;
           $data = mysqli_query($conn,$query);
           
        header('location: ModifyQ.php');

?>
