<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $feed = $_POST['feed'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "register";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn) { 
    die("Sorry unable to store :". mysqli_connect_error());
  } 
  else {
    $sql = "INSERT INTO `feedback_info` (`feedback`) VALUES ('$feed')";
   $result =  $conn->query($sql); 
  }
} 
header('location: home_page.php');
?>
