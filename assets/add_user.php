<?php
session_start(); 
include 'database/conns.php';

if (isset($_POST['add'])) {
    $fullname = $_POST['fullname'];
    $serial = $_POST['serial_no'];
    $rank = $_POST['rank'];
    $unit = $_POST['unit'];
    $role = $_POST['role_type'];
    $contact = $_POST['user_contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (empty($fullname) || empty($serial) || empty($rank) || empty($unit) || empty($role) || empty($contact) || empty($username) || empty($password)) {
        $_SESSION['alert_message'] = 'Failed to Add User. All fields are required.';
    } else {
        
        $stmt = $conn->prepare("INSERT INTO tb_users (fullname, serial_no, rank, unit, user_role, contact, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fullname, $serial, $rank, $unit, $role, $contact, $username, $password);

        if ($stmt->execute()) {
            $_SESSION['alert_message'] = 'User added successfully';
        } else {
            $_SESSION['alert_message'] = 'Failed to Add User. Error: ' . $stmt->error;
        }

        $stmt->close();
    }
    header('Location: users.php');
    exit();
} else {
    $_SESSION['alert_message'] = 'Fill up add form first';
    header('Location: users.php');
    exit();
}

$conn->close();
?>
