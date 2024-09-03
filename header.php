<header class="web-head">
        <img src="Image/Logo.png" width="90px" height="90px">
        <nav>
            <ul>
                <li><a href="Home.php">HOME</a></li>
                <li><a href="Menu.php">MENU</a></li>
                <li><a href="Card.php">CARD</a></li>
                <?php
                
                    if($_SESSION){
                        echo '<li><button><a href="signout.php">Log-Out</a></button></li>';
                    } else {
                        echo '<li><button><a href="Log-In.php">LOG IN</a></button></li>';
                }
            ?>
                 
                
            </ul>
        </nav>  
    </header>



