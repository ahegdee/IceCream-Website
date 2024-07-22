<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/signuplogin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>

<body style="background: url(../iceb3.jpeg)">

    <div class="wrapper" style="margin-left:500px;margin-top:200px;">

        <div class="form-box login">
            <h2>Sign Up</h2>
            <form action="#">
                <div class="input-box">

                    <input type="username" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">

                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-box">

                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> I accept all terms and conditions</label>

                </div>
                <button type="submit" onclick="saveData()" class="btn" id="save_btn">Sign Up</button>
                <div class="login-register">
                    <p>Already have an account?<a href="../html/login.php" class="register-link"> Login</a> </p>
                </div>
            </form>
        </div>
    </div>



</body>

<script>
    function saveData() {
        let username, password, email;

        username = document.getElementById("username").value;
        email = document.getElementById("email").value;
        password = document.getElementById("password").value;
        if (!username || !email || !password) {
            alert("Please fill in all required fields.");
            return; // Don't proceed if any required field is empty
        }

        let user_records = new Array();
        user_records = JSON.parse(localStorage.getItem("users")) ? JSON.parse(localStorage.getItem("users")) : []
        if (user_records.some((v) => {
                return v.email == email
            })) {
            alert("Duplicate data");
        } else {
            user_records.push({
                "username": username,
                "email": email,
                "password": password
            })
            localStorage.setItem("users", JSON.stringify(user_records));

        }

    }
</script>

</html>