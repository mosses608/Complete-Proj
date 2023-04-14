<?php
if(isset($_POST['register'])){
    require('Config/config.php');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $position=$_POST['position'];

    $sql="Insert into users(name, email, number, date, username, password, position) Values('$name','$email','$number','$date','$username','$password','$position')";
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