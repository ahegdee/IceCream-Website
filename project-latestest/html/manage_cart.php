<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'itemname');
            if (in_array($_POST['itemname'], $myitems)) {
                echo "<script>
                    alert('Item Already Added');
                    window.location.href='../html/products.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('itemname' => $_POST['itemname'], 'cost' => $_POST['cost'], 'Quantity' => 1);
                echo "<script>
                    alert('Item Added');
                    window.location.href='../html/products.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('itemname' => $_POST['itemname'], 'cost' => $_POST['cost'], 'Quantity' => 1);
            echo "<script>
                    alert('Item Added');
                    window.location.href='../html/products.php';
                </script>";
        }
    }

    if(isset($_POST['Remove_item'])){
        foreach ($_SESSION['cart'] as $key => $value)
        {
            if ($value['itemname'] == $_POST['itemname'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                    alert('Item Removed');
                    window.location.href='mycart.php';
                </script>";
                exit(); // Exiting after removing the item
            }
        }
    }

    // if(isset($_POST['Mod_quantity'])){
    //     foreach ($_SESSION['cart'] as $key => $value)
    //     {
    //         if ($value['itemname'] == $_POST['itemname'])
    //         {
    //             $_SESSION['cart'][$key]['Quantity'] = $POST['Mod_quantity'];
    //             echo "<script>
    //                 window.location.href='mycart.php';
    //             </script>";
    //         }
    //     }
    // }

}
?>