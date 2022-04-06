<?php
session_start();
    include("Dbcon.php");
    $idupdate=$_SESSION['Testid'];

           $query= "DELETE FROM test WHERE  Testid='$idupdate' " ;
           $data = mysqli_query($conn,$query);
           
           ?>
           <script type="text/javascript">
                window.location = "UpdateTest.php";
           </script>   
           <?php  
?>
