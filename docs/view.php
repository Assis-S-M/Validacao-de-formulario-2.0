<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Visualizar registros</title>

    <link rel="stylesheet" href="css/estiloView.css">

    <script>
        document.addEventListener("keypress", function(e) {
            if(e.key === 'Enter') {
            
                var btn = document.querySelector("#submit");
                
                btn.click();
            }
        });
    </script>
</head>
<body style="overflow: hidden;">

    <form method="get" action="view.php" id="opcoes" style="margin-left: 1.3%;">

        <label>Pesquisar por 
            <select name="filtro" id="opcoes">
                <option value="id">Id</option>
                <option value="nome" selected>Nome</option>
                <option value="cpf">Cpf</option>
                <option value="cep">Cep</option>
                <option value="rua">Rua</option>
                <option value="numero">Número</option>
                <option value="bairro">Bairro</option>
                <option value="complemento">Complemento</option>
                <option value="telefone fixo">Telefone fixo</option>
                <option value="celular">Celular</option>
                <option value="email">Email</option>
                <option value="senha">Senha</option>
            </select>
            onde registros  
            <select name="opcoesPesquisa" id="opcoes">
                <option value="pesquisaPrecisa">Pesquisa precisa</option>
                <option value="comecaCom">Começam com "pesquisa" letra/palavra</option>
                <option value="contem" selected>Possuem "pesquisa" letra/palavra</option>
                <option value="terminaCom">Terminam com "pesquisa" letra/palavra</option>
            </select>

            <input type="text" name="pesquisa" id="pesquisa" placeholder="...">

            <?php 
                $verRegistros = isset($_GET['VerTotalRegistros']) ? $_GET['VerTotalRegistros']: "não";
                
                if ($verRegistros == "não") {
                    echo "<br><button type='submit' value='sim' name='VerTotalRegistros' style='width: 180px; height: 30px; position: relative; margin-left: 10px;'>Visualizar todos os registros</button>";
                }

            ?>
        </label>

        <div id="paginas" style="position: absolute; right: 47%; top: 93%;">
            <?php
                $conexaoDataTable = mysqli_connect("localhost", "root", "", "formulario");
                $teste = mysqli_query($conexaoDataTable, "SELECT id FROM pessoafisica");
                $verRegistros = isset($_GET['VerTotalRegistros']) ? $_GET['VerTotalRegistros']: "não";

                while ($row = mysqli_fetch_array($teste)) {

                    $id = $row["id"];
                };

                $numRegistros = ceil($id / 10);

                if ((isset($_GET['pagina']) ? $_GET['pagina']: "1") > 1) {
                    
                    $paginaPast = (isset($_GET['pagina']) ? $_GET['pagina']: "1") - 1;
                } else {
                    $paginaPast = 1;
                }

                if ($verRegistros == "não") {
                    echo "<button type='submit' value='$paginaPast' name='pagina' id='paginaPast' style='width: 30px; height: 30px; margin: 10px;'><<</button>";

                    for ($i = 1; $i <= $numRegistros; $i++) {
                        echo "<input type='submit' value='$i' name='pagina' style='width: 30px; height: 30px; margin: 10px;'>";
                    };

                    if ((isset($_GET['pagina']) ? $_GET['pagina']: "1") < ($i - 1)) {
                        $paginaNext = (isset($_GET['pagina']) ? $_GET['pagina']: "1") + 1;
                    } else {
                        $paginaNext = $i - 1;
                    }

                    echo "<button type='submit' value='$paginaNext' name='pagina' id='paginaNext' style='width: 30px; height: 30px; margin: 10px;'>>></button>";

                    // if ($verRegistros == "não") {
                    //     echo "<br><button type='submit' value='sim' name='VerTotalRegistros' style='margin-left: 14.2%; width: 180px; height: 30px;'>Visualizar todos os registros</button>";
                    // }
                }
            ?>
        </div>

        <input type="submit" id="submit" hidden />
    </form>

    <table style="font-size: 16px; margin-left: 1.3%;" >
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>cpf</th>
            <th>cep</th>
            <th>rua</th>
            <th>número</th>
            <th>bairro</th>
            <th>complemento</th>
            <th>telefone fixo</th>
            <th>celular</th>
            <th>email</th>
            <th>senha</th>
        </thead>
    <?php
        include ("obterUsuarios.php");
    ?>
    </table>
</body>
</html>