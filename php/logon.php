<?php

    include "./connection.php";

    $user = $_POST['user'];
    $pass = $_POST['password'];

    $select = "SELECT * FROM tb_usuario WHERE login = '$user'";

    $response = $connection->query($select);

    $user_bd = $response->fetch_assoc();

    $user_name = $user_bd['nm_usuario'];
    // verifica se a senha digitada é a mesma do hash
    $user_password = password_verify($pass, $user_bd['senha']);

    if($user == $user_name && $pass == $user_password){
        header("location: ../home.html");
    } else {
        echo "<script>alert('CATAPIMBAS!😲 Deu tudo errado🙄'); document.location.href = '../index.html';</script>";
    }
?>