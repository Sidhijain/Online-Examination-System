<?php 

include("Dbcon.php");
// error_reporting(0); // donot want to show any error message /warning on the screen
$id=$_GET['Sid'];

$query="SELECT * FROM student WHERE Sid= '$id'";

$data=mysqli_query($conn, $query);

$res=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            background-image: url("bv3.jpg");
            background-attachment: fixed;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            /* top: 110px; */
        }

        .signupform {
            width: 700px;
            background-color: rgb(0, 0, 0, 0.4);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.4);
            width: 700px;
            margin: auto;
        }

        form {
            padding: 10px;
            position: relative;
            left: 20%;
            margin-bottom: 0px;
            border-collapse: separate;
            border-spacing: 0 25px;
            font-size: 1.5vw;
        }

        .line {
            position: relative;
            right: 21%;
            bottom: 40px;
        }

        .btn {
            margin: 10px 0px 0px 150px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }

        .b2 {
          
            margin: 0 0 0 1280px;
            text-align: center;
            padding: 8px 18px;
            border-radius: 3px;
            background-color: #D1D1D1;
            color: black;
        }

        .form {
            margin-top: 60px;
        }

        .input {
            /* margin: 0 30% 0 4%; */
            float: right;
            position: relative;
            right: 35%;
        }
    </style>
</head>

<body>
<div class="back">
        <a href="profileStudent.php">
            <button class="b2">Back</button>
        </a>
    </div>
    <div class="form">
        <div class="signupform">
            <h1>Edit Profile</h1>
        </div>
        <div class="main">
            <form action="#" method="POST">
                <span class="line">
                    <hr>
                </span>
                <div class="input_field">
                    <label>SmartCard ID :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Sid" value="<?php echo $res['Sid']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Enroll No. :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Eno" value="<?php echo $res['Eno']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Roll No. :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Rollno" value="<?php echo $res['Rollno']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Name : </label>
                    <input type="text" class="input" placeholder="Enter Your Name" name="Name" value="<?php echo $res['Name']; ?> " size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>E-mail : </label>
                    <input type="text" class="input" placeholder="abc@xyz.com" name="Email" value="<?php echo $res['Email']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Contact No. :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Contactno" value="<?php echo $res['Contactno']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Alt Contact No. :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Altcontactno" value="<?php echo $res['Altcontactno']; ?>" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                <br>

            </form>
        </div>
    </div>
    
</body>

</html>

<?php


// to fetch the records from html fields
if(isset($_POST['submit'])) // if button is clicked then pick up data of all the names written on form
{ 
    $idupdate=$_GET['Sid'];

    $id=  $_POST['Sid'];
    $er=  $_POST['Eno'];
    $rn=  $_POST['Rollno'];
    $nm=  $_POST['Name'];
    $em=  $_POST['Email'];
    $cn=  $_POST['Contactno'];
    $acn=  $_POST['Altcontactno'];
    // $ps=  $_POST['pass'];
    // $rps= $_POST['repass'];
    
    // $query="INSERT INTO admin values('$id', '$em', '$nm', '$ps','$rps')";
    $query=" UPDATE student SET Sid='$id', Eno='$er', Rollno='$rn', Name='$nm', Email='$em', Contactno='$cn', Altcontactno='$acn' WHERE Sid='$idupdate'";
    $data=mysqli_query($conn, $query);

    if($data)
            {
                ?>
                <script type="text/javascript">
                     window.location = "profileStudent.php";
                </script>   
                <?php   
            }
            else
            {
                ?>
                <script>
                    swal("Data Not Updated!", "Try Again Later!", "error");
                </script>
                <?php    
            }
}  
?>