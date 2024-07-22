<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cont.css" type="text/css">
    <title>Document</title>
    <style>
        body {
            background-image: url(../iceb4.png);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: beige;
            width: 500px;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            display: flex;
            margin-bottom: 20px;
            width: 100%;
        }

        .form-group input,
        .form-group textarea {
            flex: 1;
            margin-right: 20px;
            height: 40px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input:last-child {
            margin-right: 0;
        }

        .form-group textarea {
            height: 80px;
        }

        .form-group button {
            width: 200px;
            height: 40px;
            background-color: rgb(164, 244, 164);
            border: none;
            border-radius: 5px;
            color: gray;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
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
    <div class="container">
        <h1>DETAILS</h1>
        <form id="detailsForm">
            <div class="form-group">
                <input type="text" id="firstName" placeholder="First Name" style=" background-color:rgba(255, 127, 80,0.5);"required>
                <div id="firstNameError" class="error"></div>
            </div>
            <div class="form-group">
                <input type="text" id="lastName" placeholder="Last Name" style=" background-color:rgba(255, 127, 80,0.5);"required>
                <div id="lastNameError" class="error"></div>
            </div>
            <div class="form-group">
                <input type="text" id="phoneNumber" pattern="[0-9]{10}" placeholder="Phone Number: xxxxxxxxxx" style=" background-color:rgba(255, 127, 80,0.5);"required>
                <div id="phoneNumberError" class="error"></div>
            </div>
            <div class="form-group">
                <textarea id="comment" placeholder="Comment/Feedback" style=" background-color:rgba(255, 127, 80,0.5);"equired></textarea>
                <div id="commentError" class="error"></div>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Email ID" style=" background-color:rgba(255, 127, 80,0.5);"required>
                <div id="emailError" class="error"></div>
            </div>
            <div class="form-group">
                <input type="text" id="city" placeholder="City" style=" background-color:rgba(255, 127, 80,0.5);"required>
                <div id="cityNameError" class="error"></div>
                <select id="state" style=" background-color:rgba(255, 127, 80,0.5);margin-left:-20px;"required>
                    <option  value="">Select State</option>
                    <!-- Add options dynamically using JavaScript -->
                </select>
                <div id="stateError" class="error"></div>
            </div>
            <button type="submit" style=" background-color:palegreen;"><b>SAVE DETAILS</b></button>
        </form>
    </div>

    <script>
        const form = document.getElementById('detailsForm');
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const phoneNumber = document.getElementById('phoneNumber');
        const comment = document.getElementById('comment');
        const email = document.getElementById('email');
        const city = document.getElementById('city');
        const state = document.getElementById('state');

        form.addEventListener('submit', function(event) {
            let isValid = true;

            if (!/^[a-zA-Z]+$/.test(firstName.value)) {
                document.getElementById('firstNameError').textContent = 'First name should contain only alphabets';
                isValid = false;
            } else {
                document.getElementById('firstNameError').textContent = '';
            }

            if (!/^[a-zA-Z]+$/.test(lastName.value)) {
                document.getElementById('lastNameError').textContent = 'Last name should contain only alphabets';
                isValid = false;
            } else {
                document.getElementById('lastNameError').textContent = '';
            }
            

            if (!/^[a-zA-Z]+$/.test(city.value)) {
                document.getElementById('cityNameError').textContent = 'City name should contain only alphabets';
                isValid = false;
            } else {
                document.getElementById('cityNameError').textContent = '';
            }





            if (!/^[0-9]{10}$/.test(phoneNumber.value)) {
                document.getElementById('phoneNumberError').textContent = 'Invalid phone number';
                isValid = false;
            } else {
                document.getElementById('phoneNumberError').textContent = '';
            }

            // You can add more validation rules for other fields similarly

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if there are errors
            }
        });

        // Populate state dropdown with Indian states
        const indianStates = ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'];
        const stateDropdown = document.getElementById('state');
        indianStates.forEach(function(stateName) {
            const option = document.createElement('option');
            option.textContent = stateName;
            stateDropdown.appendChild(option);
        });
    </script>
</body>
</html>
