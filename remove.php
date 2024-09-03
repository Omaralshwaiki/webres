<?php
    include("cone.php");
    if(isset($_GET["ID"]))
    {
        $id=$_GET["ID"];

        $sql ="DELETE FROM `orders` WHERE ID = '$id'";
        $result=  mysqli_query($con, $sql);
        if($result)
        {
            header('Location: Card.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<?php
include("cone.php");

if (isset($_GET["ID"])) {
    $id = $_GET["ID"];
    $sql = "delete from orders where ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo ('your item has been deleted');
       
        header('Location: Card.php');

    } else {
        die(mysqli_error($con));
    }
}

?>