<?php

//CRUD (U)
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
$sql="UPDATE FUNCIONARIO SET NOME='$NOME',IM='$IM',SNOME='$SNOME',FUNCAO='$FUNCAO',DCONTR='$DCONTR',
      DNASC='$DNASC',NCEL='$NCEL',NTEL='$NTEL' WHERE COD_FUNC='$COD_FUNC';
if($conn->query($sql)===TRUE){
    echo "Alterado com sucesso";
}else{
    echo "Erro na alteracao".$conn_error;
}
$conn->close();
?>