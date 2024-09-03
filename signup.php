<?php
    require('cone.php');
    //i use the worst senario becuse the life is not pink
    //if($_SERVER['REQUSEST_METHOD'] == 'POST')
    if(isset($_POST['submit']))
    {
        $username= $_POST['username'];
        $pass= $_POST['password'];
        $Phone= $_POST['Phone'];
        $address=$_POST['city'];

        $sql= "INSERT INTO `user` ( `Name`, `password`, `locatiion`, `phone`) VALUES ('$username','$pass', 'address','$Phone');";
        $result= mysqli_query($con,$sql);

        if($result){
            header("Location:Log-In.php");
        }else{
            mysqli_error($con);
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_Up</title>
    <link rel="stylesheet" href="signup.css">


</head>
<body>
        <form method="POST">
            <div class="signup">
                <h2>Sign up</h2>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                
                <label for="Email"><b>Email</b></label>
                <input type="Email" placeholder="Enter Email" name="Email" required>
                <br>
                
                <label for="Phone"><b>Phone</b></label>
                <input type="Phone" placeholder="Enter phone num" name="Phone" required>
                <br>
            
                <label for="city"><b>City</b></label>
                <input type="address" placeholder="Enter address" name="address" required>
                <br>

                <button type="submit" name="submit">Sign_Up </button>


                <p>If you have an account? <a class="sub-link" href="Log-In.php"> Login Here </a></p>
            </div>
        </form> 
        
</body>
</html>