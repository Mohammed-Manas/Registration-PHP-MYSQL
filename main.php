<?php

$host = "localhost";
$uname = "root";
$pwd = "";
$database = "manas";

// Create connection
$conn = new mysqli($host, $uname, $pwd, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variable Declaration
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$action = $_POST['action'];

if ($action == "Save") {
    // Prepare and bind for INSERT
    $stmt_insert = $conn->prepare("INSERT INTO customer_table (CustomerID, CustomerName, CustomerAge, CustomerNumber) VALUES (?, ?, ?, ?)");
    $stmt_insert->bind_param("isis", $id, $name, $age, $contact);

    // Execute the INSERT statement
    if ($stmt_insert->execute()) {
        echo "Your details have been submitted successfully.";
    } else {
        echo "Error: " . $stmt_insert->error;
    }

    // Close the INSERT statement
    $stmt_insert->close();
} elseif ($action == "Update") {
    // Prepare and bind for UPDATE
    $stmt_update = $conn->prepare("UPDATE customer_table SET CustomerName=?, CustomerAge=?, CustomerNumber=? WHERE CustomerID=?");
    $stmt_update->bind_param("sisi", $name, $age, $contact, $id);

    // Execute the UPDATE statement
    if ($stmt_update->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $stmt_update->error;
    }

    // Close the UPDATE statement
    $stmt_update->close();
} elseif ($action == "Delete") {
    // Prepare and bind for DELETE
    $stmt_delete = $conn->prepare("DELETE FROM customer_table WHERE CustomerID = ?");
    $stmt_delete->bind_param("i", $id);

    // Execute the DELETE statement
    if ($stmt_delete->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $stmt_delete->error;
    }

    // Close the DELETE statement
    $stmt_delete->close();
}

// Close the connection
$conn->close();
?>