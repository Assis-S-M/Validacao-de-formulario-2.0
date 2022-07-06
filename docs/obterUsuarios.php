<?php

    $conexaoDataTable = mysqli_connect("localhost", "root", "", "formulario");
    mysqli_set_charset($conexaoDataTable, 'utf8');

    $pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa']: "";
    $filtro = isset($_GET['filtro']) ? $_GET['filtro']: "nome";
    $pagina = 10 * (isset($_GET['pagina']) ? $_GET['pagina']: "1");
    $regisrosMostrados = ($pagina - 9);
    $opcoesPesquisa = isset($_GET['opcoesPesquisa']) ? $_GET['opcoesPesquisa']: "contem";
    $VerRegistros = isset($_GET['VerTotalRegistros']) ? $_GET['VerTotalRegistros']: "não";

    if ($VerRegistros == "não" && $opcoesPesquisa == "pesquisaPrecisa") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '$pesquisa' AND id BETWEEN '$regisrosMostrados' AND '$pagina'";
    } else if ($VerRegistros == "não" && $opcoesPesquisa == "comecaCom") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '$pesquisa%' AND id BETWEEN '$regisrosMostrados' AND '$pagina'";
    } else if ($VerRegistros == "não" && $opcoesPesquisa == "terminaCom") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '%$pesquisa' AND id BETWEEN '$regisrosMostrados' AND '$pagina'";
    } else if ($VerRegistros == "não" && $opcoesPesquisa == "contem") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '%$pesquisa%' AND id BETWEEN '$regisrosMostrados' AND '$pagina'";
    } else if ($VerRegistros == "sim" && $opcoesPesquisa =="pesquisaPrecisa") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '$pesquisa'";
    } else if ($VerRegistros == "sim" && $opcoesPesquisa =="comecaCom") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '$pesquisa%'";
    } else if ($VerRegistros == "sim" && $opcoesPesquisa =="terminaCom") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '%$pesquisa'";
    } else if ($VerRegistros == "sim" && $opcoesPesquisa =="contem") {

        $query = "SELECT * FROM pessoafisica WHERE `$filtro` LIKE '%$pesquisa%'";
    }

    $registro = mysqli_query($conexaoDataTable, $query);

    while ($row = mysqli_fetch_array($registro)) {

        $id = $row["id"];
        $nome = $row["nome"];
        $cpf = $row["cpf"];
        $cep = $row["cep"];
        $rua = $row["rua"];
        $numero = $row["numero"];
        $bairro = $row["bairro"];
        $complemento = $row["complemento"];
        $telefoneFixo = $row["telefone fixo"];
        $celular = $row["celular"];
        $email = $row["email"];
        $senha = $row["senha"];

        $table = "<tr><td><p>$id</p></td><td><p>$nome</p></td><td><p>$cpf</p></td><td><p>$cep</p></td><td><p>$rua</p></td><td><p>$numero</p></td><td><p>$bairro</p></td><td><p>$complemento</p></td><td><p>$telefoneFixo</p></td><td><p>$celular</p></td><td><p>$email</p></td><td><p>$senha</p></td></tr>";
        echo $table;
    };
?>