<?php
//check if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Retrive data
    $studentName = $_POST["Name"];
    $studentAddress = $_POST["Address"];
    $studentPhoneNo  =  $_POST["Phone_No."];
    $studentEmail = $_POST["Email"];
    $studentUserId = $_POST["User_Id"];
    $studentPassword = $_POST["Password"];
    $studentConfirmPassword = $_POST["Confirm_Password"];




//connection
// $conn = mysqli_connect("localhost","root","","student");
require '../Databse/connection.php';
    

$sql = "INSERT INTO stud(Name,Address,Email,User_Id,Password,Confirm_Password) VALUES('$studentName','$studentAddress','$studentEmail',$studentPhoneno''$studentUserId','$studentPassword','$studentConfirm_Password')";

if ($studentPassword === $studentConfirmPassword) {
  if(mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("location:../login.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  mysqli_close($conn);
  }
}else{
  echo "Passwords do not match. Please try again.";
}

?>