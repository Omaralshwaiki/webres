<?php
    include 'cone.php';
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        //from card form update
        $id=$_GET["ID"];
        $Quan=$_GET['Qoun'];

        $sql = "update orders set quntiti='$Quan' where ID='$id'";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            header('Location: Card.php');
        }else{
            echo "You don't edit";
        }
    }
?>