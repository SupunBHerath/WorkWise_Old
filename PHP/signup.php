<?php
require("connectdb.php");
if(isset($_POST['submit'])){
    $fnamme=$_POST['firstName'];
    $lname =$_POST['lastName'];
    $email =$_POST['email'];
    $username =$_POST['supun'];
    $password =$_POST['password'];
    $cpasssword =$_POST['confirmpassword'];

    if(!empty($_POST['supun']) &&!empty($_POST['firstName'] )&&!empty($_POST['lastName']) &&!empty($_POST['email'] )&& !empty($_POST['password'] )){
        if($password==$cpasssword){

            $stmt = $conn -> prepare('INSERT INTO  useraccountsignup(UserName,FName,LName ,Email,Password) VALUES(?,?,?,?,?)');
            $stmt -> bind_param('SSS',$username,  $fnamme,$lname,$email,$password);
            $stmt -> execute();
            $stmt -> close();
            echo'Sucessfully';
            header("location:Home.php");
            

        }else{
            echo 'Password Does not match!';
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(../Image/Home/1.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form {
            background-color: #ffffffe4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 2);
            width: 100%;
            text-align: center;

        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .name-input {
            display: flex;
            gap: 10px;
        }

        .form input {
            width: 100%;
            border-radius: 10px;
        }

        #S1 {
            width: 100%;
            border-radius: 20px;
            font-weight: bolder;
            font-size: larger;
        }

        .logo {
            width: 130px;
            cursor: pointer;
            float: left;
        }

        #firstName {
            width: 48%;
            float: inline-start;


        }

        #lastName {
            width: 48%;
            float: inline-end;
            margin-left: 0px;

        }
    </style>
</head>

<body>

    <form action="../PHP/connectsignup.php" method="post">
        <div class="form">
            <a href="../HTML/Home.html"> <img src="../Image/logo/logo1.png" alt="logo" class="logo"></a>
            <a href="../HTML/Home.html"><img src="../Image/logo/X.png" alt="x"
                    style="float: inline-end; width: 20px; height: 20px;"></a>

            <br><br><br>
            <h2>Sign up to find work you love </h2>
            <br>
            <input type="text" id="firstName" name="firstName" placeholder=" First name" required>

            <input type="text" id="lastName" name="lastName" placeholder="Last name" required>
            <br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" required>
            <br>
            <div >
               <h5 >Yes, I understand and agree to the Upwork Terms of Service</h5>
            </div>

            <center>
                <br>
                <button type="submit" id="S1" value="submit">Sign Up</button>
            </center>
            <br>
            <h5 style="color: red;"> -- Already have WorkWise an account ? <a href="../HTML/Login.html"
                    style="border: 0; ">Login</a>

        </div>
    </form>

</body>

</html>