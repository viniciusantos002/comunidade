<?php

include'conexao.php';

$nome= $_POST ['Nome '];
$sobrenome= $_POST['Sobrenome'];
$Data_de_nascimento= $_POST['Data_de_nascimneto'];
$email= $_POST['E-mail'];
$senha=$_POST['Senha'];
$confirmacao_de_senha= $_POST['Confirmacao_de_senha'];

$inserir = "INSERT INTO usuarios (Nome,Sobrenome,Datade_Nascimento,E-mail,Senha,Confirmacao_de_senha) VALUES ('$nome','$sobrenome','$Data_de_nascimento','$email','$senha','$confirmacao_de_senha');
$resultado= mysqli_query($conn,$inserir);
    if(mysqli_affected_rows($conn)!= 0) {
        echo
             "<script>
        
            alert("Cadastro realizado com sucesso.");
            </script>";
header('location:Tela_inicial.php');

            



?>