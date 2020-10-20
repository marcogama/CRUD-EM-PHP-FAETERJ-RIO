<?php

//CRUD  (R)

$servername="localhost";
$username="3daw";
$password="12341234";
$dbname="ABCD_RIO";

//Estabelecendo conexão

$conn= new mysqli($servername,$username,$password,$dbname);

//Verificando conexão

if(conn->connect_error){
    die("Falha na conexao:".$conn->connect_error);
}
if($SERVER["REQUEST METHOD"]=="POST"){
    $NOME=$_POST["NOME"];
    $IM=$_POST["INICIAL_MEIO"];
    $SNOME=$_POST["SOBRENOME"];
    $DNASC=$_POST["DATA_NASC"];
    $DCONTR=$_POST["DATA_CONTR"];
    $FUNCAO=$_POST["FUNCAO"];
    $NCEL=$_POST["NUM_CEL"];
    $NTEL=$_POST["NUM_TEL"];
    
    $sql="INSERT INTO FUNCIONARIO(NOME,INICIAL_MEIO,SOBRENOME,DATA_NASC,DATA_CONTR,
          FUNCAO,NUM_CEL,NUM_TEL)
          VALUES(".$NOME.",".$IM.",".SNOME.",".DNASC.",".DCONTR.",".FUNCAO.",".NCEL.",".$NTEL.")";
    if(conn->query(sql)===TRUE){
        echo "Registro inserido com sucesso";
    }else{
        echo "Erro de registro";
    }
}else{
    echo "Metodo errado";
}
conn->close;
?>