<?php

$nome       = $_POST["nome"];
$email      = $_POST["email"];
$telefone   = $_POST["telefone"];

$con = mysqli_connect("localhost","root","","agenda");

$sql = "insert into contatos values(null,'$nome','$email','$telefone')";



if($nome !="" && $email != "" && $telefone != ""){
    if(mysqli_query($con, $sql)){
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
    }
}else{
    echo "Por favor, preencha todos os campos!";
}

mysqli_close($con);
?>