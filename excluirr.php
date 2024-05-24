<html><!--  ESTE EXCLUIR.PHP ELE SO SERVE PARA ESCLUIR UM USUARIO ENTAO ELE NAO PRECISA TER NADA POIS A PESSOA VAI PARA A PAGINA E VOLTA PARA O INDEX-->

<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

	<div class="w3-display-middle w3-xlarge">

		<?php

		if (isset($_GET["id"]) != false) {
			$url = "localhost";
			$user = "root";
			$pass = "";
			$db = "solo_tech";

			$conexao = mysqli_connect($url, $user, $pass, $db);

			$sql = "DELETE FROM usuarios WHERE id = " . $_GET["id"];

			$ok = mysqli_query($conexao, $sql);

			if ($ok == true) {
				mysqli_close($conexao);
				header('location: index.php?msg=Excluído com sucesso!');
			} else {
				echo "Erro ao excluir Pessoa " . mysqli_error($conexao);
				mysqli_close($conexao);
			}
		}
		?>
	</div>
</body>

</html>