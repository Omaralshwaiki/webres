<?php
    include("cone.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        if(isset($_SESSION['privalige']))
        {
            $name=$_POST['ProductName'];
            $desc=$_POST['ProductDescription'];
            $price=$_POST['Price'];
            $image=$_POST['image'];
            
            
            $user=$_SESSION['privalige'];
           

            $sql="INSERT INTO `orders` (`productName`, `productdesc`, `price`, `image`, `username`) 
            VALUES ('$name', '$desc', '$price' ,'$image', '$user') ";
            $result = mysqli_query($con,$sql);
           
        }else{
            echo '<script>alert("please sign in")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Foodies - Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include 'header.php';?>

<main class="container my-5">
    <?php
        if(isset($_SESSION['privalige'])) {
            $username = $_SESSION['privalige'];
            echo "<p class='text-center'>Hello, $username! </p>";
            
        }
    ?>

    <div class="row">
        <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($con, $sql);

            if($result) {
                while($row = mysqli_fetch_array($result)) {
                    $name = $row['ProductName'];
                    $desc = $row['ProductDescription'];
                    $image = $row['image'];
                    $price = $row['Price'];

                    echo '
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="' . $image . '" class="card-img-top" alt="' . $name . '" style="height: 280px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">' . $name . '</h5>
                                    <p class="card-text">' . $desc . '</p>
                                    <h5 class="card-text text-success">Price: ' . $price . ' PJ</h5>
                                </div>
                                <div class="card-footer">
                                    <form method="post" class="d-grid">
                                        <input type="hidden" name="image" value="' . $image . '">
                                        <input type="hidden" name="ProductName" value="' . $name . '">
                                        <input type="hidden" name="ProductDescription" value="' . $desc . '">
                                        <input type="hidden" name="Price" value="' . $price . '">
                                        <button type="submit" name="add-to-card" class="btn btn-primary">Select</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        ?>
    </div>
</main>
<p class='text-center'><a href='Card.php' class='btn btn-primary'>My Meals</a></p>;

<?php include 'footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>