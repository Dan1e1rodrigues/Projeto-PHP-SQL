<html>
<head>
        <title>Processamento de Exclusao de Administrador</title>
    </head>
    <body>
        <h1>Processamento de Exclusao de Administrador</h1>
        <br>
            Mensagem para o usuario
        <br>
        <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
        
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

$id = $_GET["id"];

// 

$admin = $pdo->query("SELECT * FROM ADMINISTRADOR where ADM_ID=" . $id)->fetch();
$nome = $admin["ADM_NOME"];
$email = $admin["ADM_EMAIL"];
?>
<form action="excluirprocessamento.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <br>
    Nome:
    <input type="text" name="nome" value="<?php echo $nome ?>">
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $email ?>">
    <br>    
    <input type="SUBMIT" name="ENVIAR">     

</form>
    </body>
    </html>  