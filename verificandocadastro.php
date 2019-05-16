<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="";
$nome_banco="projeto";

$conn= new mysqli($nome_servidor,$nome_usuario,$senha,$nome_banco);
if ($conn->connect_error===TRUE){
    die("asdf".$conn->connect_error);
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $datadenascimento=$_POST ['data'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $confsenha=$_POST['confsenha'];
    

$sql="INSERT INTO tabela1 ($nome,$sobrenome,$data,$email,$senha,$confsenha) VALUES('nome,sobrenome,data,email,senha,confsenha')";
$dados="SELECT * FROM nome='$nome AND sobrenome='$sobrenome AND data='$datadenascimento' AND email='$email' senha='$senha AND confsenha='$confsenha' ";
$inserir= $conn->query ($dados);
if($conecta->query($sql)==TRUE){
    
}


if($resultado-> num_rows>0) {
    $_SESSION['nome'] =$nome;
    $_SESSION['sobrenome']=$sobrenome ;
    $_SESSION['data']=$datadenascimento;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['confsenha']=$confsenha;
  
    
    echo"<script> alert('Cadastro realizado com sucesso') </script>";
    header('location:pagina.php');
    
}
else {
    session_unset();
    session_destroy();
    echo"<script>  alert('Cadastro não realizado');
    window.location.href = 'telacadastro.php';
    </script>";
}

?>
  

