<?php 
session_start();
include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM participant WHERE email = ?";
    $stmt = $mysqli -> prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $participant = $result->fetch_assoc();
        
        if ($password === $participant['password']) {
            $_SESSION['id_participant'] = $participant['id'];
            $_SESSION['name'] = $participant['name']; 
            header("Location: ../home/home.php");
            exit;
        } else {
            header("Location: login.html");
        }
    } else {
        header("Location: login.html");
    }
}
?>