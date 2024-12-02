<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../connection.php';



    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if (empty($name) || empty($cpf) || empty($email) || empty($phone) || empty($password)) {
        die('Not completed');
    }

    $query = "INSERT INTO participant (name, cpf, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt === false) {
        die('Erro in to prepare consult: ' . $mysqli->error);
    }

    $stmt->bind_param("sssss", $name, $cpf, $email, $phone, $password);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: ../login/login.html");
        exit;
    } else {
        echo "Error " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();

}  else {
    die('Not permited method!');
}
?>
