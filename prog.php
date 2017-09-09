<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Projeto - Lucas Arariba</title>
</head>
<body>
<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$msg = $_GET['msg'];
$conn = new PDO('mysql:host=localhost;dbname=teste','root','');
$stmt = $conn->prepare ("INSERT INTO teste1(nome,email,msg) VALUES(:nome,:email,:msg) ");
$stmt->bindValue(":nome",$nome);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":msg",$msg);
$stmt->execute();
    echo "Nome : ".$nome."</br>";
    echo "Email : ".$email."</br>";
    echo "Mensagem : ". $msg ."</br>";
    echo "Adicionado com sucesso !  ";
?>
</body>

</html>
