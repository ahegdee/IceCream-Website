<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="image/jpeg" rel="icon" href="../img/logo.jpeg">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
</head>
<body>

<?php
session_start();

$slno=1;
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/project-latestest/html/index.php">
            <img src="../img/logo.jpeg" alt="logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/project-latestest/html/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/project-latestest/html/products.php">Products</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<style>
    .logo {
        width: 90px;
        height: auto;
        border-radius: 50%;
    }
    .total-box {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 300px; /* Adjust as needed */
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top:170px;
        margin-right:70px;
        padding: 10px;
    }
    .total-box h4 {
        margin-top: 0;
    }

    .info{
        margin-top:1%;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    margin:30px;
    }

    #purchaseTable{
        margin-top:500px;
    }

    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    }

    th {
    background-color: #f2f2f2;
    }

    footer{
        background-color:lightgray;
        text-align:center;
    }

</style>

<div class="container">
    <div class="icecream-container">
        <div class="info col-lg-12 text-center border rounded bg-light">
            <h1>MY CART</h1>
        </div>

        <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr> 
                        <th scope="col">Sl no.</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    if(isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                    echo "
                    <tr>
                        <td>$slno</td>
                        <td>" . $value['itemname'] . "</td>
                        <td>" . $value['cost'] . "<input type='hidden' class='icost' value='" . $value['cost'] . "'></td>
                        <td><input class='text-center iquantity' onchange='subtotal()' type='number' value='" . $value['Quantity'] ."' min='1' max='10'></td>
                        <td class='itotal'></td>
                        <td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                            <input type='hidden' name='itemname' value='". $value['itemname'] ."'>
                            </form>
                        </td>
                    </tr>
                    ";
                $slno++;
                }
            }
                ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="total-box">
        <div class="border bg-light rounded p-4">
        <h4>Grand total:</h4>
        <h5 class="text-left" id="gtotal"></h5>
        <br>

        <form id="purchaseForm">

        <div class="form-group">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" required>
        </div>
        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phoneNumber" required>
        </div>
        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="address" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" checked>
            <label class="form-check-label" for="cashOnDelivery">
          Cash On Delivery
            </label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentMethod" id="payOnline">
            <label class="form-check-label" for="payOnline">
          Pay online now
            </label>  
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">Make Purchase</button>
        </form>
    </div>
</div>

<table id="purchaseTable">
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Payment Method</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>

<script>
    var gt = 0;
    var icost = document.getElementsByClassName('icost');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subtotal() {
        gt = 0;
        for (i = 0; i < icost.length; i++) {
            itotal[i].innerText = (icost[i].value) * (iquantity[i].value);
            gt = gt + (icost[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt;
    }
    subtotal();

    document.getElementById("purchaseForm").addEventListener("submit", function(event) {
  // Prevent the default form submission
  event.preventDefault();

  // Get form data
  const fullName = document.getElementById("fullName").value;
  const phoneNumber = document.getElementById("phoneNumber").value;
  const address = document.getElementById("address").value;
  const paymentMethod = document.getElementById("cashOnDelivery").checked ? "Cash On Delivery" : "Pay Online";

  // Append the form data to the table
  const tableBody = document.getElementById("purchaseTable").getElementsByTagName('tbody')[0];
  const newRow = tableBody.insertRow();
  const fullNameCell = newRow.insertCell(0);
  const phoneNumberCell = newRow.insertCell(1);
  const addressCell = newRow.insertCell(2);
  const paymentMethodCell = newRow.insertCell(3);
  fullNameCell.innerText = fullName;
  phoneNumberCell.innerText = phoneNumber;
  addressCell.innerText = address;
  paymentMethodCell.innerText = paymentMethod;

  // Clear the form fields
  document.getElementById("purchaseForm").reset();
});

</script>
</script>

    <footer>
        <h1>Empty</h1>
    </footer>


</body>
</html>