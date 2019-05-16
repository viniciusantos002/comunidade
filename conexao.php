<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="";
$nome_banco="projeto";

$conn= new mysqli($nome_servidor,$nome_usuario,$senha,$nome_banco);
if ($conn->connect_error===TRUE){
    die("asdf".$conn->connect_error);
}

$email= $_POST['email'];
$senha= $_POST['senha'];

$encontrar="SELECT * FROM tabela1 WHERE email='$email' AND senha='$senha'";
$resultado= $conn->query($encontrar);

if($resultado-> num_rows>0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:pagina.php');
    
}
else {
    session_unset();
    session_destroy();
    echo"<script>  alert('Email ou senha incorreto');
    window.location.href = 'Tela_inicial.php';
    </script>";
}
 ?> 
   