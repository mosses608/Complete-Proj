<?php
if(isset($_POST['register'])){
    require('Config/config3.php');

    $product=$_POST['product'];
    $payment_mode=$_POST['payment_mode'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $number2=$_POST['number2'];
    $date2=$_POST['date2'];
   
    //$position=$_POST['position'];

    $sql="Insert into Orders_placed(product, payment_mode, quantity, price, number2, date2) Values('$product','$payment_mode','$quantity','$price','$number2','$date2')";
    $query=mysqli_query($conn,$sql);
    
    if($query){
        $row=mysqli_fetch_array($query);
        header("location:index.php");
        die();
    }else{
        echo "Unable to insert data!";
    }
}
?>