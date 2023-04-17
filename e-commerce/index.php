<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js" defer></script> -->
    <title> E-commerce </title>
</head>
<body>


<div class="container">
    <div class="content">
        <header>
            <div class="logo">
                <i class="fa-brands fa-pied-piper-alt"></i>
            </div>

            <div class="menu">
                    <a href=""> <i class="fa-solid fa-cart-shopping"></i> </a>
                    <p>0</p>
            </div>
        </header>

        <main>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="left">
                <div> 
                    <img src="images/kyrie_6_bred.png" alt="">
                    <h3> Kyrie 6 Bred </h3>
                    <h3 class="price"> $ 200.00 </h3>
                    <a href="includes/cart.includes.php?id=1"> Add to cart </a> 
                </div>

                <div> 
                    <img src="images/kyrie_7_black.png" alt="k7b">
                    <h3> Kyrie 7 Red-Black </h3>
                    <h3 class="price"> $ 300.00 </h3>
                    <a href="includes/cart.includes.php?id=2"> Add to cart </a>
                </div>

                <div> 
                    <img src="images/kyrie_7_concept_horus.png" alt="k7b">
                    <h3> Kyrie 7 Concept Horus </h3>
                    <h3 class="price"> $ 400.00 </h3>
                    <a href="includes/cart.includes.php?id=3"> Add to cart </a> 
                </div>

                <div> 
                    <img src="images/kyrie_7_gs_chip.png" alt="chip">
                    <h3> Kyrie 7 GS Chip </h3>
                    <h3 class="price"> $ 500.00 </h3>
                    <a href="includes/cart.includes.php?id=4"> Add to cart </a>
                </div>
                
            </form>
        </main>
    </div>
</div>


    
<script src="https://kit.fontawesome.com/07b61b3998.js" crossorigin="anonymous"></script>
</body>
</html>