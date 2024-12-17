<?php
include 'action.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $created_at = $_POST['created_at'];

    // Corrected SQL statement with proper commas
    $bit = "UPDATE users SET first_name = ?, last_name = ?, dob = ?, gender = ?, email = ?, created_at = ? WHERE id = ?";
    
    // Prepare the statement
    $mega = $conn->prepare($bit);
    
    // Corrected parameter types and added 'i' for the ID (integer)
    $mega->bind_param("ssssssi", $first_name, $last_name, $dob, $gender, $email, $created_at, $id);

    // Execute the statement and handle the result
    if ($mega->execute()) {
        header('Location: users.php');
        exit(); // Always include exit() after a redirect
    } else {
        echo "Error 505: Update failed - " . $mega->error;
    }
} else {
    echo "Error 603: Update button not clicked.";
}
?>
