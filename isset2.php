<?php
if(isset($_POST['register'])){
    require('Config/config3.php');

    $product=$_POST['product'];
    $email2=$_POST['email2'];
    $number2=$_POST['number2'];
    $date2=$_POST['date2'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    //$position=$_POST['position'];

    $sql="Insert into Sales(product, email2, number2, date2, quantity, price) Values('$product','$email2','$number2','$date2','$quantity','$price')";
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