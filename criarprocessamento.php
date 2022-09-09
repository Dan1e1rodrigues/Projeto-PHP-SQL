<?php
//Dados para conexao ao MYSQL
$mysqlhostname = "144.22.231.213";
$mysqlport = "3306";
$mysqlusername = "usuarios";
$mysqlpassword = "Senac@1976";
$mysqldatabase = "meubanco";

//MOSTRA a string de conexao ao MYSQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

//CAPTURA o post do usuario
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//REALIZA uma QUERY SQL para BUSCAR o administrador que tenha o EMAIL e a senha passando
$cmdtext= "INSERT INTO ADMINISTRADOR( ADM_nome, adm_email, Adm_senha) Values('" . $nome . "','" . $email . "','" . $senha . "')";
$cmd= $pdo -> prepare($cmdtext);

$status= $cmd->execute();

if($status) {
    echo"adm criado com sucesso";
} else {
    echo "erro ao inserir";
}
?>
<br>
<a href="listaradmins.php">volta para a pagina de lista</a>

</body>
</html>

