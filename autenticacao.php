<head>
    <title>Login - Autenticacao</title>
</head>

<body>
    <br>
        <h1>Login - Autenticacao</h1>
    <br>

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
$email = $_POST["email"];
$senha = $_POST["senha"];

//REALIZA uma QUERY SQL para BUSCAR o administrador que tenha o EMAIL e a senha passando
$admin= $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email . "' AND ADM_SENHA='" . $senha . "'")->fetchAll();

//Se o retorna for vazio (0), então a senha ou emailestão incorretos

if( count($admin) == 0) {
    echo"Usuario ou senha invalidos";
} else {
    echo "Usuario autenticado";
}
?>
</body>
</html>

