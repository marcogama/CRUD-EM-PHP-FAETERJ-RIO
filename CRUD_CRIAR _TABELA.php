<?php

//CRUD  (C)
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

//Criando tabela

$sql="CREATE TABLE FUNCIONARIO (
MAT  INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NOME        VARCHAR(15) NOTNULL,
IM          VARCHAR(1) NOTNULL,
SNOME       VARCHAR(30) NOTNULL,
DNASC       DATE NOTNULL,
DCONTR      DATE NOTNULL,
FUNCAO      VARCHAR(30) NOTNULL,
NCEL        INTEGER(11) UNSIGNED,
NTEL        INTEGER(11) UNSIGNED,
)";

if(conn->query($sql)===TRUE){
    echo "Tabela criada com sucesso";
}else{
    echo "Erro ao criar tabela:".$conn->error;
}
$conn->close();
?>