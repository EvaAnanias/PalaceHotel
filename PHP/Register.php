<?php
require('Config/Connect.php');
session_start();

if (isset($_POST['email']) && $_POST['email'] != '') {
    $email = $_POST['email'];
    $password = md5($_POST['senha']);
    $name = $_POST['name'];

    try {
        $smtm = $conn->prepare('SELECT * FROM `clientes` WHERE `email` = :email');
        $smtm->bindParam('email', $email);
        $smtm->execute();

        $result = $smtm->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();

    }

    if (count($result) > 0) {
        header('Location:../HTML/Cadastro.php?registrationfailed');

    } else {
        try {
            $smtm = $conn->prepare('INSERT INTO `clientes` (`email`, `senha`, `nome`, `tipoUsuario`) VALUES (:email, :pass, :nome, 2)');
            $smtm->bindParam('email', $email);
            $smtm->bindParam('pass', $password);
            $smtm->bindParam('nome', $name);
            $smtm->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        header('Location:../HTML/Login.php');
    }
}