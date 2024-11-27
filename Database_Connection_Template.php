<?php
    // This is a sample code to connect to a database
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test";
    
    try {
        // Attempt to establish a database connection
        $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    
        // Check if there's an error in the database connection
        if ($conn->connect_error) {
            throw new Exception("Could Not Connect: " . $conn->connect_error);
        }
        // Connection successful
    
    } catch (Exception $e) {
        // If an error occurs during the database connection, handle it here
        echo "Database Connection Error: " . $e->getMessage();
        exit(); // Terminate script execution
    }
?>
    