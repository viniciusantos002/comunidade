<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $Nome_servidor="localhost";
       $Nome_usuario="root";
       $Senha="";
       $nome_banco="login";
       $conecta=new mysqli($Nome_servidor,$Nome_usuario,$Senha,$nome_banco) or die('Erro na conexao');
       
       mysql_select_bd($conecta,$nome_banco)  or die('erro na selecao do banco');
       
       $Email=$_POST['Email'];
           $Senha=$_POST['Senha'];
           $query= mysql_query($conecta,"SELECT * FROM login WHERE Email='$Email' AND senha='$Senha'");
           $row= mysql_num_rows($query);
           echo $row;
           echo $usuario;
           echo $senha;
           
        if($row>0) {
            session_start();
            $_SESSION['ID(Nick)'] = $_POST['login'];
            $_SESSION['Senha'] = $_POST['Senha'];
            $consulta = mysql_query($conecta,"SELESCT * FROM login WHERE ID(Nick)='$usuario'");
            $login= mysql_num_rows($consulta);
        }
            if($login > 0) {
                header('Tela_inicial.php');
            }
            else {
                session_unset();
                session_destroy();
                echo "<script>
                    alert('Login ou senha incorreto');
                    window.location.href='capa_do_projeto.html';
                    </script>";
                    
                
                
            }    
             
          
        ?>
    </body>
</html>
