<?php 
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/responsividade.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    <title>Agro & Tech</title>
</head>
	<body>
	<header id="menu">
        <nav>
            <ul class="lista">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="sobrenos.php">SOBRE NÓS</a></li>
                <li><a href="faleconosco.php">FAQ</a></li>
                <li><a href="botanica.php">BOTÂNICA</a></li>
            </ul>
			<?php
            // Exibe o nome do usuário atualmente logado
            echo '<p class="nome">'.$_SESSION["email"]. ' ' .$_SESSION["id"].'</p>';
            ?>
        </nav>
		<a href="logout.php">sair.</a>
    </header>
		<h1>VOCE ESTA LOGADO PARABENS VOLTE AGORA PARA PAGINA</h1>
	</body>
</html>