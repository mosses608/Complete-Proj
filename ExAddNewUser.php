<?php
/*// Start the session
session_start();
?>
<?php

include '../Config/config.php';
/*include '../Config/config1.php';
include '../Config/connect.php';

 $name = ($_POST["name"]);
 $email = ($_POST["email"]);
 //$email = ($_POST["email"]);
 $number = ($_POST["number"]);
 $date = ($_POST["date"]);
 $username = ($_POST["username"]);
 $password = ($_POST["password"]);
 $position = ($_POST["position"]);
 /*$ProfilePicture = ($_FILES["ProfilePicture"]["name"]);
 $username2="";
  	
$queri= mysqli_query($conn,"SELECT * FROM  users where username='$username'"); 
while($ss = mysqli_fetch_array($queri))
	{
	$username2=$ss['username'];
	}

if($username==$username2){
echo "<script>alert('The UserName has Allready Used')</script>";
echo "<script>location.href='../AddNewUser.php'</script>";
}

else
{
$query ="INSERT INTO 
		users (`name`, `email`, `number`, `date`, `username`, `password`, `position`) 
		VALUES ('$name', '$email','$number', '$date', '$username','$password', '$position')";
 $row="mysqli_num_rows($query)";

 mysqli_query($conn,$query)or die(mysqli_error($conn));
 
 if(mysqli_affected_rows($conn,)>=1){
	echo "<script>alert('The user Account is successfully created, can now login')</script>";
	echo "<script>location.href='../AddNewUser.php'</script>";

 }else{
	echo "<script>alert('the user Account is not successfully created, plz try again later')</script>";
	echo "<script>location.href='../AddNewUser.php'</script>";

 } }
 ?>
  <?php
$target_dir = "../assets/img/Profile_Uploaded/";
$target_file = $target_dir . basename($_FILES["ProfilePicture"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $target_file);*/    
?>
