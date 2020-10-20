<?php

//CRUD  (R)
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
$sql="SELECT COD_FUNC,NOME,FUNCAO FROM FUNCIONARIO";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
    while($row=$result->fetch_assoc){
        echo "Funcionario:".$row["FUNCIONARIO"]."-Nome:".$row["NOME"]."-FUNCAO:".$row["FUNCAO"]."<br>";
    }
}else{
    echo "Nenhum resultado";
}
$conn->close();
?>