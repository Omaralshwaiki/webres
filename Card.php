<?php
    include 'cone.php';
    session_start();
    if (!isset($_SESSION['privalige'])) {
        header("Location: Log-In.php"); // Redirect to login page if not logged in
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARD</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<?php include 'header.php';?>

    <main>
    <table class="cart-table">
        <thead>
            <tr>
                <th >Image</th>
                <th >Name</th>
                <th >quantity</th>
                <th >Price</th>
            </tr>
</thead>
        <tbody>
            <?php
           
                $user =$_SESSION['privalige'];
                $sql="select * from orders where username='$user';";
                $result = mysqli_query($con,$sql);
                if($result){
                    $total=0;
                    while($row = mysqli_fetch_array($result)){
                        //from database
                        $id=$row['ID'];
                        $image=$row['image'];
                        $porduname=$row['productName'];
                        $Qoun=$row['quntiti'];
                        $price=$row['price']*$Qoun;       
                        $total +=$price;
                echo '
                    <tr class="cart-item">
                        <td>
                            <img src="'. $image . '" alt="Item 1">
                        </td>
                        <td> <p>' . $porduname .'</p> </td>
                        <td>
                            <form action="updateItem.php">
                            <input type="number" name="Qoun" value="'. $Qoun .'" min="1">
                            <input type="hidden" name ="ID" value= '. $id . '>
                            <button type="submit" > Update</button>
                            </form>
                        </td>
                        <td>' .$price . ' PJ</td>
                        <td>
                            <button class="btn btn-danger"><a class="text-light" href="remove.php?ID=' . $id . '">Remove</a></button>
                        </td>
                    </tr>';
                
                 
        

                

                
            }
        }   

                ?>
                </tbody>
                </table>
             <?php
                echo "<p>Total: $total PJ</p>";
                ?>
        <button class="btn btn-primary my-5" onclick="checkout()"> <a href="Menu.php" class="text-light" >Chick Out</a></button>

            
        
        
    </main>
    <?php include 'footer.php';?>
<script src="massage.js"></script>
  
</body>
</html>
