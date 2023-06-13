<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    require_once('Config/Connect.php');

    try {
        $smtm = $conn->prepare('DELETE FROM clientes WHERE id = :id');
        $smtm->bindParam(':id', $id);

        if ($smtm->execute()) {
            header('Location: ../HTML/Gerenciamento.php');
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();

    }
}