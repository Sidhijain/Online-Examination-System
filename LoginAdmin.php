<?php
    session_start();

    include("Dbcon.php");
    error_reporting(0);

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
           
        }

        .loginform {
            width: 600px;
            background-color: rgb(0, 0, 0, 0.4);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;

        }

        .main {
            background-color: rgba(0, 0, 0, 0.4);
            width: 600px;
            margin: auto;
        }

        form {
            padding: 10px;
            position: relative;
            left: 30%;
            margin-bottom: 10px;
            border-collapse: separate;
            border-spacing: 0 25px;
            font-size: 1.5vw;
        }

        .line {
            position: relative;
            right: 31%;
            bottom: 40px;
        }

        .submit {
            margin-left: 15%;
        }

        .b1 {
            margin: 10px 0px 0px 70px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }

        .b2 {
            margin: 50px 0px 0px 10px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }
        .b3{
            margin: 10px 0px 0px 1280px;
            text-align: center;
            padding: 8px 18px;
            border-radius: 3px;
            background-color: #D1D1D1;
            color: black;
        }
        .form{
            margin-top: 100px;
        }
        .signup {
            font-size: 1.3vw;
            margin-top: 30px;
        }
        .input{
            float: right;
            position: relative;
            right: 53%;
        }
    </style>
</head>

<body>
<div class="back">
        <a href="index.html">
            <button class="b3">Back</button>
        </a>
    </div>
    <div class="form">
    <div class="loginform">
        <h1>Log In</h1>
    </div>
    <div class="main">
        <form action="#" method="POST">
            <span class="line">
                <hr>
            </span>
            <div class="input_field">
                <label>User ID :</label>
                <input type="text" class="input" name="Aid" placeholder="Enter Your User ID" required/>
            </div>  
            <br>
            <div class="input_field">
                <label>Password :</label>
                <input type="password" class="input" name="Pass" placeholder="Enter Your Password" required/>
            </div>  
            <br>
            <div class="input_field">
                    <input type="submit" class="b1" name = "submit" value="Log In" required/>
                    <!-- <button class="b1" name="submit" type="submit"> Log In </button> -->
            </div>
            <div class="signup">
                If you are new:
                    <button class="b2" > <a href="SignUpAdmin.php">Sign Up</a></button>
            </div>
            </form>   
       </div>
        </form>
    </div>
    </div>
  
</body>

</html>
<?php 

// to fetch the records from html fields
if(isset($_POST['submit']))      // if button is clicked then pick up data of all the names written on form
{ 
    $id= $_POST['Aid'];
    $ps= $_POST['Pass'];

    $query="SELECT * from admin WHERE Aid= '$id' AND Pass='$ps'";
    $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted
    $res=mysqli_num_rows($data);
              if($res===1)
                {
                    $id_pass=mysqli_fetch_assoc($data);
                    
                    // $db_pass=$id_pass['Pass'];

                    $_SESSION['Aid']=$id_pass['Aid'];
                    $_SESSION['Name']=$id_pass['Name'];
                    $_SESSION['Email']=$id_pass['Email'];
                    
                    // $pass_check=password_verify($ps, $db_pass);
                    // $_SESSION['Aid']=$id;
                    header("Location: profileAdmin.php");
                    exit();
                }
                else{
                    ?>
                    <script>
                              swal("Login Unsuccessful!", "Incorrect User ID!", "error");
                    </script>
                    <?php     
                }           
}

?>