<?php
    include "./connection.php";

    $name_table = "tb_usuario";

    $name = $_POST['name'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sector = $_POST['sector'];
    $incripted_password = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO $name_table values(null,'$name', '$user', '$incripted_password', '$sector');";

    $sql = $connection->query($insert);

    if($sql){
        echo "<script>document.location.href = '../inserido.html';</script>";
    } else {
        echo "<script>alert('Deu ruim😳'); location.reload();</script>";
    }
?>