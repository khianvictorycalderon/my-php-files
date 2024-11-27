<?php
    // Connect to database
    require_once("PHP_SQL_Connect_To_Database_Template_Sample.php");
      try {
        $sample_username = "Kamsahamnida";
        $sample_password = "Geronimo";
        $hash_pass = password_hash($sample_password, PASSWORD_DEFAULT);
    
        $sql_query = "
            INSERT INTO camera (username, password, pass_plain_text)
            VALUES (?, ?, ?)
        ";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('sss', $sample_username, $hash_pass, $sample_password);
        $stmt->execute();
    
        echo "New record created successfully";
        } catch (Exception $e) {
        echo 'Connection failed: ' . $e->getMessage();
        }
    
        $conn->close();
?>