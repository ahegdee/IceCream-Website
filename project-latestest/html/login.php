<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/signuplogin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background: url(../iceb3.jpeg)">
    <header class="header">

        <link href="#" class="logo">
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
    <section class="icecream-container">
    <div class="wrapper" style="margin-left:500px;margin-top:200px;">

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">

                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-box">

                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>


                <button type="submit" onclick="saveData()" class="btn" id="save_btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="../html/signup.php" class="register-link"> Sign Up</a> </p>
                </div>
            </form>
        </div>
    </div>
    </section>
</body>

<script>
    function saveData() {
        let password, email;

        email = document.getElementById("email").value;
        password = document.getElementById("password").value;
        if (!email || !password) {
            alert("Please fill in all required fields.");
            return; // Don't proceed if any required field is empty
        }

        let user_record = new Array();
        user_record = JSON.parse(localStorage.getItem("users")) ? JSON.parse(localStorage.getItem("users")) : []
        if (user_record.some((v) => {
                return v.email == email && v.password == password
            })) {
            alert("Login Successful");
            let current_user = user_record.filter((v) => {
                return v.email == email && v.password == password
            })[0]

            localStorage.setItem("username", current_user.username);
            localStorage.setItem("email", current_user.email);
            //window.location.href="profile.html";
        } else {
            {
                alert("Login Failed");
            }

        }

    }
</script>

</html>