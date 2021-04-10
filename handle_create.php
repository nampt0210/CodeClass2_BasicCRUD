<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $productName = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        
        $sql = "INSERT INTO product (name, quantity, price) VALUES ('$productName', '$quantity', '$price')";
        $result = mysqli_query($conn, $sql);
        header('location: index.php');
    }

?>