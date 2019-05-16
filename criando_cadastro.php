
 <?php
       $nome_servidor="localhost";
       $nome_usuario="root";
       $senha="";
       $banco="projeto";
       
        //criando conexão
       $conexao= mysqli_connect($nome_servidor,$nome_usuario,$senha,$banco) or die(mysql_error);
       mysql_select_db($banco) or die(mysql_error());
       
        //verificando conexão
       if($conecta->connect_error) {
           die("Conexão falhou:". $conecta->connect_error."<br>");
     
       }
       echo"Conexão realizada com sucesso <br>";
        //Criando banco de dados
       $sql=" create data base  Bando de dados do site";
       if($conecta->query($sql) === true) {
           echo"Banco de dados criado com sucesso <br>";
           }
           else {
               echo"Erro ao criar banco de dados:". $conecta->error."<br>";
           }
           $conecta->close();


?>