<?php
session_start();
if (isset($_SESSION["email"])) {
    header("Location: perfil.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/responsividade.css">
    <link rel="shortcut icon" href="assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">

</head>

<body>

<div class="page">
        <form method="POST" class="formLogin">

            <a href="index.php">
                <img class="logo" src="assets/img/pngwingpreto.png" alt="Logo">
            </a>
 
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="password" id="senha" placeholder="Digite sua senha" name="senha" maxlength="8" />

            <input type="submit" value="Acessar" class="btn" src="perfil.php" herf="perfil.php" />
               
            <form action="esqueceu.php" method="post">
                <a href="esqueceusenha.php">Esqueci minha senha</a>
 
                <form action="cadastro.php" method="post">
                <a href="cadastro.php">Cadastro</a>
            </form>
 
       
    </div>

    <footer>
        <div class="rodape">
            <div class="mano">
                <p>&copy; 2023 SoloTech. Todos os direitos reservados.</p>
                <ul>
                    <li><a href="polipriv.php">Política de Privacidade</a></li>
                    <li><a href="termos.php">Termos e Condições</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
<?php   

session_start(); //usar variaveis 

if(isset($_POST["email"]) && ! empty($_POST["email"])){
    $url = "localhost";
    $user = "root";
    $pass = "";
    $db = "solo_tech";
    $conexao = mysqli_connect($url, $user, $pass, $db);

    $sqlVer = "SELECT * FROM usuarios WHERE email ='" .$_POST['email']."'  AND senha ='" .$_POST['senha']."'";


    $ok = mysqli_query($conexao, $sqlVer);//esse ok ele da uma checada na conexão 
    
    $rowcount = mysqli_num_rows($ok);//o rowcount serve para contar as linhas do banco 

    if ($rowcount > 0) {//se a quantidade de linhas for maior que zero ele continua

        $emailusuario = $_POST["email"]; // coloca o nome como variavel
        $_SESSION['email'] = $emailusuario;
     
        //Se acabar a internet do usuario ele ainda continua conectado no site para garantia do usuario ser legitimo
        // $_SESSION["conexao"] = [$servidor = 'localhost',$sernome = 'root',$sersenha = '',$banco = 'solo_tech'];

        //Pegando o id do email
        $sql = "SELECT id FROM usuarios WHERE email = '$emailusuario'";
        $resultado= mysqli_query($conexao, $sql);
        
        if ($resultado) {
            // Verifique se há linhas de retorno igual ali no $rowcount
            if (mysqli_num_rows($resultado) > 0) {
                // Obtenha os dados da primeira linha
                $row = mysqli_fetch_assoc($resultado);
        
                // O ID do usuário está agora em $row['id']
                $_SESSION['id'] = $row[0]['id'];

            } else {
                mysqli_close($conexao);//fecha a conexão
            }
        } else {
            // Se a consulta falhar, exiba uma mensagem de erro
            echo "Erro na consulta: " . mysqli_error($suaConexao);
        }

        mysqli_close($conexao);//fecha a conexão
        
        header('Location: perfil.php'); // leva a pagina inicial (index.php)
        exit();
    } else {       

        echo  "<script>alert('Login deu BO!')</script>";

        mysqli_close($conexao);
    }
}
?>