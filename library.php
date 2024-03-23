<?php session_start(); 
    include 'Database/connection.php';
    $sql = 'SELECT * FROM `libraries` WHERE `id`='.$_GET['lib_id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $title=$row['library_name'];
    include './includes/top.php';
?>
    <!--Main Part-->
<?php
    include './includes/bottom.php';
?>