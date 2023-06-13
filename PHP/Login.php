<?php
require('Config/Connect.php');

if (isset($_POST['email']) and $_POST['email'] != '') {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    try {
        $smtm = $conn->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :senha");
        $smtm->bindParam(':email', $email);
        $smtm->bindParam(':senha', $senha);
        $smtm->execute();
        $result = $smtm->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    if (count($result) > 0) {
        foreach ($result as $row) {
            $id = $row['id'];
            $usertype = $row['tipoUsuario'];
            $nome = $row['nome'];
        }
        if (!isset($_SESSION)) {
            session_start();
            $_SESSION['idusuario'] = $id;
            $_SESSION['nome'] = $nome;
            $_SESSION['tipoUsuario'] = $usertype;
            if($usertype == '1'){
                header('Location: ../HTML/Gerenciamento.php');
            } else {
                header('Location: ../HTML/Home.php');
            }
            
        }
    }else{
        header('Location: ../HTML/Login.php?login=false');
    }
}