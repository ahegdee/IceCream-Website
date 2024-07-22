<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
    <link rel="icon" type="image/png" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/products.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="image/jpeg" rel="icon" href="../img/logo.jpeg">
    <script src="../js/productscript.js" defer> </script>
</head>

<body>
    <div>
        <header class="header">

            <link href="#" class="logo">
            <a href="/project-latestest/html/login.php">
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
                <div class="search-wrapper">
                    <input type="search" id="search" placeholder="search here..." data-search>

                </div>
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


        <section class="icecream-container">
            <div class="heading">
                <h3>ALL OUR FLAVOURS</h3>
            </div>
            <div class="container">
                <div class="f1 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/1.jpg" data-hover="../img/1b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Strawberry Buttermilk</h4>
                        <h2 class="cost">Rs.100</h2>
                        <h2>Grown-for-us Ohio strawberries blended with cream and cultured buttermilk for subtle tartness.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Strawberry Buttermilk">
                            <input type="hidden" name="cost" value="100">
                            <a href="/project-latestest/html/flavour1.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f2 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/2.jpeg" data-hover="../img/2b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Honey Vanilla Bean</h4>
                        <h2 class="cost">Rs.100</h2>
                        <h2>Made with Fair Trade vanilla beans that are warm and complex in flavor and a perfect partner for a
                            touch of honey and grass-grazed milk.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Honey Vanilla Bean">
                            <input type="hidden" name="cost" value="100">
                            <a href="/project-latestest/html/flavour2.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f3 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/3.jpeg" data-hover="../img/3b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Dark chocolate truffle</h4>
                        <h2 class="cost">Rs.100</h2>
                        <h2>Complex and ethereal flavor from the best cocoa the world has to offer. Finishes with an ultralight
                            whiff of coconut cream.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Dark chocolate truffle">
                            <input type="hidden" name="cost" value="100">
                            <a href="/project-latestest/html/flavour3.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f4 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/4.jpeg" data-hover="../img/4a.jpeg" alt="ice-cream">
                        </div>
                        <h4>Caramel Mango</h4>
                        <h2 class="cost">Rs.150</h2>
                        <h2>Tastes like fading summer sunlight topped with cracked mango caramel.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Caramel Mango">
                            <input type="hidden" name="cost" value="150">
                            <a href="/project-latestest/html/flavour4.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f5 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/5.jpeg" data-hover="../img/5b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Wildberry Lavender</h4>
                        <h2 class="cost">Rs.150</h2>
                        <h2>Intensely fruity, brambly berry ice cream with a pop of sweet orange and lavender.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Wildberry Lavender">
                            <input type="hidden" name="cost" value="150">
                            <a href="/project-latestest/html/flavour5.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f6 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/6.jpeg" data-hover="../img/6b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Birthday Cake</h4>
                        <h2 class="cost">Rs.150</h2>
                        <h2>Buttercream frosting, golden cake, and a rainbow of sprinkles.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Birthday Cake">
                            <input type="hidden" name="cost" value="150">
                            <a href="/project-latestest/html/flavour6.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f7 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/7.jpeg" data-hover="../img/7b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Fuffernutter Pie</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Roasted peanut butter and vanilla marshmallow ice creams side-by-side with oat pie crust pieces.
                        </h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Fuffernutter Pie">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour7.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f8 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/8.jpeg" data-hover="../img/8b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Powdered Jelly Doughnut</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Vanilla custard, raspberry jelly, and a brown sugar donut crumble.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Powdered Jelly Doughnut">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour8.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f9 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/9.jpeg" data-hover="../img/9b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Greenmint Chip</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Peppermint cream with crunchy, bittersweet chocolate.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Greenmint Chip">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour9.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f10 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/10.jpeg" data-hover="../img/10b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Banana Cream Pudding</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Real bananas, ultra-rich coconut cream, and scratch-made vanilla wafers.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Banana Cream Pudding">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour10.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f11 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/11.jpeg" data-hover="../img/11b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Brown Butter Almont Brittle</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Brown butter almond candy crushed into buttercream ice cream.</h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Brown Butter Almont Brittle">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour11.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>


                <div class="f12 flavour">
                    <form action="/project-latestest/html/manage_cart.php" method="POST">
                        <div class="image-container">
                            <img class="pic" src="../img/12.jpeg" data-hover="../img/12b.jpeg" alt="ice-cream">
                        </div>
                        <h4>Brambleberry Crisp</h4>
                        <h2 class="cost">Rs.200</h2>
                        <h2>Oven-toasted oat streusel and a sweet-tart brambleberry jam layered throughout vanilla ice cream.
                        </h2>
                        <div class="expadd">
                            <button type="submit" name="Add_to_cart" class="btn n">Add to cart</button>
                            <input type="hidden" name="itemname" value="Brambleberry Crisp">
                            <input type="hidden" name="cost" value="200">
                            <a href="/project-latestest/html/flavour12.php" class="btn n">Explore more</a>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        <footer>
            <div class="footer-container">
                <div class="foot1">

                </div>
                <div class="foot2">
                    <h1 class="f">Our Outlets</h1>
                    <ul>
                        <li class="footer-text">Chandigarh</li>
                        <li class="footer-text">Bangalore</li>
                        <li class="footer-text">Maharashtra</li>
                        <li class="footer-text">Delhi</li>
                    </ul>

                </div>
                <div class="foot3">
                    <h1 class="f">Quick links</h1>
                    <br>
                    <ul>
                        <a href="/project-latestest/html/index.php" class="footer-text">home</a>
                        <a href="/project-latestest/html/aboutus.php" class="footer-text">about us</a>
                        <a href="/project-latestest/html/products.php" class="footer-text">menu </a>
                        <a href="/project-latestest/html/reviews.php" class="footer-text">reviews</a>
                        <a href="/project-latestest/html/contactus.php" class="footer-text">contact us</a>
                    </ul>
                    <br>
                    <br>
                    <link href="#">
                    <a href="/project-latestest/html/index.php" class="footer-logo">
                        <img src="../img/logo.jpeg" alt="logo">
                    </a>
                    </link>
                </div>
            </div>
        </footer>
        <script src="../js/script.js"> </script>
</body>

</html>