<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reviews.css" type="text/css">
    <title>FFlexbox Example</title>
    <style>
        .container {
            display: flex; /* Use flexbox layout */
            flex-wrap:wrap;; 
            /* Arrange items horizontally */
            justify-content:space-evenly; /* Distribute items along the main axis with space between */
            align-items: center; /* Align items vertically */
            height: 400px;
            
            /*border: 2px solid #333;  Add border for visualization */
            padding: 10px; /* Add padding for spacing */
        }
        .item {
            width: 300px; /* Set item width */
            height: 300px; /* Set item height */
            background-color:rgba(119, 136, 153,0.8); /* Set background color */
            color: white; /* Set text color */
            text-align: center; /* Center text */
            line-height: 100px; /* Vertically center text */
        }

        .rectangle {
            width: 730px; /* Set rectangle box width */
            height: 300px; /* Set rectangle box height */
            background-color: #007bff; /* Set background color */
            margin: 5px; /* Add margin for spacing between items */
            background-color:rgba(119, 136, 153,0.8);
            color:white;
        }

        .inner-container {
            display: flex;
            flex-direction: column;
            padding:0;
            line-height:1;
            align-items:flex-start;
            margin-bottom: 20px;
            margin-top:20px;
            margin-left:20px;
            margin-right:20px;
            height:100px;
        }
        .round-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #fff;
            margin-right: 10px;
            
        }
    </style>
</head>

<body style="background-image:url('../img/bg2.png')">
    <header class="header">

        <link href="/project-latestest/html/index.php" class="logo">
        <a href="/project-latestest/html/index.php">
            <img src="../img/logo.jpeg" alt="logo">
        </a>
        </link>

        <nav class="navbar">
            <a href="/project-latestest/html/index.php" class="n">home</a>
            <a href="/project-latestest/html/aboutus.php" class="n">about us</a>
            <a href="/project-latestest/html/products.php" class="n">menu </a>
            <a href="/project-latestest/html/reviews.php" class="n">reviews</a>
            <a href="/project-latestest/html/contactus.php" class="n">contact us</a>
        </nav>



        <div class="icons">
            
            <div class="fas fa-shopping-cart" id="cart-btn">
                <a href="/project-latestest/html/mycart.php">
                    <img src="../img/cart.jpeg" alt="logo">
                </a>
            </div>
            <div class="fas fa-bars" id="menu-btn">
            <a href="/project-latestest/html/login.php">
                    <img src="../img/login.jpeg" alt="logo">
                </a>
            </div>
        </div>


    </header>
    <div class="container">
      
        <div  style="margin-top:200px;margin-left:50px;margin-right:5px; "class="item"> 
            <div class="inner-container">
         
            <p style="text-align:left;margin-top:70px">"Absolutely hooked on the Dark Chocolate Truffle Ice Cream! It's like a dreamy chocolate explosion in every bite. Can't get enough!"</p>
        </div>
        <div class="inner-container">
            <div class="round-image" style="margin-top:50px;background-image:url('../img/an1.png'); background-size:cover;"></div> </div>
            <div class="inner-container"> 
            <div style="margin-left:10px;margin-top:-60px;">
                <b style="margin-left:40px">Vian L. David</b>
            
            </div>
        </div></div>

        <div  style="margin-top:200px;margin-left:40px;margin-right:50px; "class="rectangle"> 
            <div class="inner-container">
         
            <p style="text-align:left;margin-top:90px">"The Banana Cream Pudding Ice Cream is like a cozy hug from grandma with every spoonful...Loved it!!"</p>
        </div>
        <div class="inner-container">
            <div class="round-image" style="margin-top:50px;background-image:url('../img/an2.png'); background-size:cover;"></div> </div>
            <div class="inner-container"> 
            <div style="margin-left:10px;margin-top:-60px;">
                <b style="margin-left:40px">Anikaaa</b>
            
            </div>
        </div></div>
       

        <div  style="margin-top:100px"class="item"> 
            <div class="inner-container">
         
            <p style="text-align:left;margin-top:90px">"The Strawberry Buttermilk Ice Cream is oh-so-creamy! It's the ultimate treat to beat the heat. Absolutely love it!""</p>
        </div>
        <div class="inner-container">
            <div class="round-image" style="margin-top:50px;background-image:url('../img/an3.png'); background-size:cover;"></div> </div>
            <div class="inner-container"> 
            <div style="margin-left:10px;margin-top:-60px;">
                <b style="margin-left:40px">Payal S.</b>
            
            </div>
        </div></div>

        <div  style="margin-top:100px"class="item"> 
            <div class="inner-container">
         
            <p style="text-align:left;margin-top:70px">"Absolutely hooked on the Dark Chocolate Truffle Ice Cream! It's like a dreamy chocolate explosion in every bite. Can't get enough!"</p>
        </div>
        <div class="inner-container">
            <div class="round-image" style="margin-top:50px;background-image:url('../img/an4.png'); background-size:cover;"></div> </div>
            <div class="inner-container"> 
            <div style="margin-left:10px;margin-top:-60px;">
                <b style="margin-left:40px">Arun</b>
            
            </div>
        </div></div>

        <div  style="margin-top:100px"class="item"> 
            <div class="inner-container">
         
            <p style="text-align:left;margin-top:90px">"The Birthday Cake flavour is definitely a new favorite for making special moments sweeter!"</p>
        </div>
        <div class="inner-container">
            <div class="round-image" style="margin-top:50px; background-image:url('../img/an5.png'); background-size:cover;"></div> </div>
            <div class="inner-container"> 
            <div style="margin-left:10px;margin-top:-60px;">
                <b style="margin-left:40px">Ria Mehta</b>
            
            </div>
        </div></div>





    </div>
</body>
</html>