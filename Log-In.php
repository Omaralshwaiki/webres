<?php
    require ('cone.php');
    //start session
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM user WHERE Name ='$username' and password = '$pass';";

        $result = mysqli_query($con,$sql);
        $useerdet = mysqli_fetch_assoc($result);
        //اذا رجع اشي على اليوزر ديتيل بكون موجود بدل ما اعمل لووب ارجع كلشي
        if($useerdet){
            $_SESSION['privalige'] =$username;
            header("Location:Home.php");
        }
        else{
            echo "invalid user or password";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="LogIn.css">
    <title>Log in</title>
   
    
    
</head>
<body>
    

    <main class="logs">
        
        <img src="Image/1000_F_244471353_THRnV8UsdNUyLFoYteBe755AnQDsJkOc.jpg" height="250px" width="250px"  >
        <h2>Log in</h2>
        <form action="" method="POST">
            <label for="username"> User Name</label>
            <input type="text" placeholder="Username" name="username" required>

            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password" required>
            <button id="button" type="Login"name ="login" >Log in</button>
            <p>Don't have an account? <a class="signup" href="signup.php"> Sign_Up here </a></p>
        </form>
        

       
    </main>

   
</body>
</html>