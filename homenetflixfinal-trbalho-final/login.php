<?php
session_start();
include('conexao.php');

if(empty($_POST[usuario]) || (empty($_POST[senha])) {
    header('Location : index.php');
    exit();

}

$usuario = mysqli_real_scape_string($conexao , $_POST['usuario']);
$senha = mysqli_real_scape_string($conexao , $_POST['senha']);

$query= "select idusuario, usuario from usuario where usuario = {$usuario} and senha = md5('{$senha}');";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

echo $row;exit;

if($row == 1){
    $_SESSION['usuario']=$usuario;
    header('Location : painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location : index.php');
    exit();
}
?>