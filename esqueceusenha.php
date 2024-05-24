<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Busca</title>
        <link rel="stylesheet" href="assets/css/esqueceusenha.css">
        <link rel="stylesheet" href="assets/css/responsividade.css">
        <link rel="shortcut icon" href="tcc/assets/img/favicon_io/android-chrome-512x512.png" type="image/x-icon">
    </head>

<body>
    <div class="page">

        <div class="">

            <form action="" method="post" class="formLogin">
                <select name="coluna" div class="coluna">
                    <option value="id">Selecione</option>
                    <option value="email">e_mail</option>
                    <option value="senha">senha</option>

                </select>
                <br><br>
                <input type="text" name="busca" placeholder="Digite aqui"><br>

                <input type="submit" value="Buscar" div class="cadbtn   "><br> <br>

                <a href="login.php" value="voltar" div class="cadbtn"> <br> <br>
            </form>

            <form action="login.php" method="post">
			<br>
			<button type="submit" class="btn">Voltar ☹</button>
		</form>

 
            <?php
            $url = "localhost";
            $user = "root";
            $pass = "";
            $db = "solo_tech";

            $conexao = mysqli_connect($url, $user, $pass, $db);


            $resultados2 = "";
            echo $resultados2;

            if ($conexao === false) {
                die("Erro de Conexão: " . mysqli_connect_error());
            }

            if (isset($_POST["busca"])) {
                $busca = mysqli_real_escape_string($conexao, $_POST["busca"]);
                $coluna = mysqli_real_escape_string($conexao, $_POST["coluna"]);

                $sql = "SELECT * FROM usuarios WHERE $coluna = '$busca' ";

                $resultados = mysqli_query($conexao, $sql);

                if ($resultados === false) {
                    die("Erro na consulta: " . mysqli_error($conexao));
                }

                if (mysqli_num_rows($resultados) > 0) {
                    while ($linhas = mysqli_fetch_assoc($resultados)) {
                        echo "id: " . $linhas["Id"] . " E_mail: " . $linhas["email"] . " senha: " . $linhas["senha"] . " <a href='excluirr.php?id=" . $linhas["Id"] . "'>excluir</a><br>";
                    }
                } else {
                    if (isset($_POST["busca"]) && !empty($_POST["busca"])) {
                        echo "Nenhum resultado encontrado para: " . $_POST["busca"];
                    } else {
                        echo "Nenhum resultado encontrado";
                    }
                }

                mysqli_close($conexao);
            }
            ?>
            <center><a href="login.php" class="cadbtn">Login</a></center>


            
        </div>

  

</body>

</html>