<?php

//CRUD (D)
//ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006

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
$sql="DELETE FROM FUNCIONARIO WHERE COD_FUNC='$COD_FUNC'";
if($conn->query($sql)===TRUE){
    echo "Delecao efetuada";
}else{
    echo "Erro ao tentar apagar".$conn->error;
}
$conn->close();
?>