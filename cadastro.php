<html>
<head>
	<link rel="stylesheet" href="assets/css/cadastro.css">
	<link rel="stylesheet" href="assets/css/responsividade.css">
	<link rel="shortcut icon" href="tcc/assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">
</head>
<body>
	<div class="page">
		<form action="" method="post" class="formLogin">
			<h1>Faça seu cadastro!</h1>
						
			Usuário: 
			<br> (5 ou mais caracteres) <input type="text" name="usuario"><br>
			<br>
			Email: 
			<br> (8 ou mais caracteres)<input type="text" name="email"><br><br>
			Senha: 
			<br> (8 ou mais caracteres)<input type="password" name="senha" maxlength="8" minlength="8"><br><br>
			<input type="submit" value="Cadastrar" class="btn">

			<a href="login.php" value="voltar" div class="cadbtn"> <br> <br>
		</form>

		<form action="login.php" method="post">
			<br>
			<button type="submit" class="btn">Voltar ☹</button>
		</form>
		<?php

		if (isset($_POST["email"]) != false) {
			$url = "localhost";
			$user = "root";
			$pass = "";
			$db = "solo_tech";

			$conexao = mysqli_connect($url, $user, $pass, $db);

			$nick = $_POST["usuario"] ;
            $email = $_POST["email"];
            $senha = $_POST["senha"];
   
    // Verifica se tanto o email quanto a senha têm pelo menos 8 caracteres
    if( strlen($nick) >= 5  && strlen($email) >= 8 && strlen($senha) >= 8) {
 
    $sql = "INSERT INTO usuarios (usuario,email,senha) VALUES ('".$_POST["usuario"]."' , '".$_POST["email"]."', '".$_POST["senha"]."')";
    $ok = mysqli_query($conexao, $sql);
 
    if($ok == true){
        mysqli_close($conexao);
        header('location: index.php?msg=Cadastrado com sucesso!');
    }
    else{
        echo "Erro ao cadastrar Usuário " . mysqli_error($conexao);
    }
}
else{
	print"<script>alert('Erro ao cadastrar Usuário verifique se o email e a senha  tem  8 ou mais caracteres  o usuario tem que ter mais doque 5!')</script>" .
	  mysqli_close($conexao) ; 
}
		}
		?>
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