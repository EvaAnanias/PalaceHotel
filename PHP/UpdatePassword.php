<?php
require('Config/Connect.php');
session_start();

if (isset($_POST['senha']) && $_POST['senha'] != '') {
    $password = md5($_POST['senha']);
    $id = $_SESSION['idusuario'];
    echo $password;
    try {
        $smtm = $conn->prepare('UPDATE `clientes` SET `senha` = :senha WHERE `id` = :id');
        $smtm->bindParam(':senha', $password);
        $smtm->bindParam(':id', $id);

        if ($smtm->execute()){
            header('Location: ../HTML/Conta.php?PasswordChanged');
        } else {
            echo '<script>javascript:alert("Ocorreu um erro");</script>';
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}