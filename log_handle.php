<?php
require './Database/connection.php';

if(isset($_POST["login"])) {
    // Assuming 'username' and 'password' are submitted via POST
    $userId = $_POST['User_Id'];
    $password = $_POST['Password'];
    $sql_query = "select * from stud where User_Id ='$userId' AND Password='$password'";
    $result = mysqli_query($conn,$sql_query);
    $total=mysqli_num_rows($result);
    //   echo "data fetch successfully";
     //session create   
   if ($result && $total === 1) {
        // Start the  session (if not already started)

          session_start();
        
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $user;
        // echo $user['email'];
        header('Location:./index.php'); 
    } else {
     echo "Invalid credentials. Please try again.";
      }
    
    

        // Redirect to a protected page
        
     } else {
        // Display an error message
        header('Location:./login.php');
        // ?>
        // <script>
        //     console.log("Invalied user or password")
        // </script>
        // <?php
        // echo 'Invalid username or password';
     }

?>