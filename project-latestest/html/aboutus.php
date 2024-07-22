<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aboutus.css" type="text/css">
    <title>Flexbox Example</title>
    <style>
        .container {
            display: flex; /* Use flexbox layout */
            flex-wrap:wrap;
            /* Arrange items horizontally */
            justify-content:space-around; /* Distribute items along the main axis with space between */
            align-items: center; /* Align items vertically */
            height: 400px;
            
            /*border: 2px solid #333;  Add border for visualization */
            padding: 10px; /* Add padding for spacing */
            padding-top: 120px; /* Add padding for spacing */
        }
        .item {
            width: 300px; /* Set item width */
            height: 300px; /* Set item height */
            background-color:rgba(119, 136, 153,0.8); /* Set background color */
            color: white; /* Set text color */
            text-align: center; /* Center text */
            line-height: 100px; /* Vertically center text */
            margin-top:100px;
        }

        .rectangle {
           
            background-color: #007bff; /* Set background color */
            margin: 5px; /* Add margin for spacing between items */
            background-color:rgba(119, 136, 153,0.8);
            color:white;
        }

        img {
            max-width: 100%;
            height: auto;
        }

.c{ 
    display:flex;
    flex-wrap:wrap;

}

.round-image {
    display:flex;
    flex-wrap:wrap;
    width:200px;
    height:200px;
    border-radius: 50%;
    background-color: #fff;
    margin-right: 10px;
    
}
       
    </style>
</head>
<body>
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
      
        <div class="rectangle" style="background-image:url(../b4.png); width:100%; height:200px;">

            <h1 style="text-align:center;margin-top:70px"> ABOUT US</h1>
                
        </div>
        

        <div class="rectangle" style="background-color:beige; width:100%; height:1300px;">
          <div class="c"> <h1 style="text-align:center;margin-top:70px;color:darkslateblue;margin-left:450px">A NEW STANDARD IN ICE CREAM</h1><br></div>
          <div class="c"> <p style="text-align:center;margin-top:40px;color:darkslateblue; margin-top:80px;margin-left:450px;margin-right:450px; "> We build ice creams completely from scratch using a unique recipe honed and perfected over more than 20 years by our founder, Jeni Britton. Our ice creams have a uniquely smooth texture and buttercream body, with bright flavor and clean finish. We’re here to set new standards for ice cream classics and to create our own. At Jeni’s, you’ll find flavors inspired by our curiosities—art, history, pop culture, and beyond—that simply don’t exist anywhere else.</p></div>
       <div class="c"><img src="../img/ic1.png" style="margin-top:-325px;margin-left:5px;width:400px;height:450px;"></div>
       <div class="c"><img src="../img/ic2.png" style="margin-top:-450px;margin-left:990px;width:400px;height:450px;"></div>

       <div class="c"><img src="../img/ic3.png" style="margin-top:60px;margin-left:5px;width:400px;height:450px;"></div>
       <div class="c"><img src="../img/ic4.png" style="margin-top:-450px;margin-left:990px;width:400px;height:450px;"></div>

       <div class="c" > 
<p style="text-align:center;margin-top:3px;color:darkslateblue; margin-top:-300px;margin-left:450px; margin-right:450px;">We are extremely proud that today the range is available in nearly 400 outlets across the south of England including 35 Waitrose stores and this list is growing all the time. The superior quality and flavour of Simply Ice Cream has been officially recognised and we have a multi-award winning range, including a Guild of Fine Food, Great Taste Gold Three Star award for our Strawberry Buttermilk Ice cream, the highest accolade judged by great taste and texture.</p>

       </div>

       <div class="round-image" style="margin-top:50px;background-image:url('../img/logo.jpeg'); background-size:cover; margin-left:600px; margin-top:-600px;"></div>




       </div>
       
</div>




  



        
       

    </div>
</body>
</html>