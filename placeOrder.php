<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $json_data = file_get_contents('php://input');
    
    $data = json_decode($json_data, true);
    
    if ($data !== null) {

        $slotID = $data['slotID'];
        $userID = $_SESSION['user']['stud_id'];

        include "Database/connection.php"; 
        $sql = "";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        // Perform any desired operations with the data
        
        // Send a response (optional)
        $response = array('status' => 'success', 'message' => $row['available'], 'query' => $sql);
        echo json_encode($response);
    } else {
        // Send an error response if data could not be decoded
        $response = array('status' => 'error', 'message' => 'Failed to fetch data');
        echo json_encode($response);
    }
} else {
    // Send an error response if request method is not POST
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
