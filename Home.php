
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palestinefoodies</title>
   
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">


</head>


<body>

    <?php 
    session_start();
    include 'header.php';?>


    <main>
        <section id="About">
            <h2>About</h2> 
        <table>
            <tr>
               
                <td>
                    <p>In 1998, Palestinian Foodies opened its doors, founded by  my grandfather, a man deeply rooted in the culinary traditions of his homeland. He had journeyed far from Palestine, carrying with him not just memories, but the recipes passed down through generations. These recipes, rich in history and flavor, became the heart of Palestinian Foodies.<br>

                        The restaurant was small, just a few tables, but it quickly became the soul of the community. People were drawn to the warmth of my grandfather’s hospitality and the authenticity of the food. Dishes like Maqluba, a savory upside-down rice dish, and Musakhan, with its roasted chicken and sumac, were prepared with the same care and passion that had been part of the family for centuries.<br>

                        As customers entered, they were greeted with the aromas of freshly baked bread and the comforting scent of spices. The walls were adorned with photographs of old Palestine, and the sounds of traditional music created an atmosphere that felt like home. Palestinian Foodies wasn’t just a place to eat; it was a place where stories were shared, traditions were kept alive, and every meal was a tribute to the resilience and beauty of Palestinian culture.</p>
                </td>
               
            </tr>
          </table>
               
        </section>
       
        
        <section id="Top-sale">
            <h2>TOP SALE</h2>
            <div class="Foodies">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgRIAVTgfWd9djdkFhD8nePfD3cKCfB9OiGQ&s" width="280px" height="280px"> 
               <h3>Maqloba</h3>
               <p>maqloba:rice,chicken,zahra,betenjan,bharat </p>&ThinSpace;
            </div>
              
                
            <div class="Foodies">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvk3mCSUW-MpdKu63cBDhR_-V_-DDMOinFCQ&s" width="280px" height="280px"> 
                <h3>Dawali</h3>
                <p>Grape leaves stuffed with rice, meat, and spices, then cooked in a tangy lemon broth.</p>&ThinSpace;
               
            </div>
               
               
            <div class="Foodies">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkezEId3TjsFBUkFgj8QtZwvtugHPk6EfZ1A&s" width="280px" height="280px">  
                <h3>Msakhan</h3>
                <p>A popular Palestinian dish of roasted chicken, sumac, onions, and olive oil, served on taboon bread.</p>&ThinSpace;   
            </div>

            <div class="Foodies">
                <img src="https://www.seriouseats.com/thmb/hDefz4GPVbeWtE2So2NaTozp24A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20221011-Qidreh-MaiKakish-Hero-472647a2bf814f518b83ffc58cfb192c.JPG" width="280px" height="280px"> 
               <h3>Qidra</h3>
               <p>A rice dish cooked with chickpeas, lamb or chicken, and flavored with cumin and other spices. </p>&ThinSpace;
            </div>
        </section>
        
    </main>

    <?php include 'footer.php';?>
   
    <script src="Messeagbox.js"></script>
    
</body>
</html>