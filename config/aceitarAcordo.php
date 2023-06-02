<?php
include "../../base/conexao_martdb.php";
include "php/fornecedorescrud.php";

$dataInicio = $_GET['dataInicio'];
$dataFim = $_GET['dataFim'];
$fornecedor = $_GET['fornecedor'];
$tipoacordo = $_GET['tipoacordo'];

// $dataInicioA = explode(",", $dataInicio);
// $dataFimA = explode(",", $dataFim);
$fornecedorA = explode(",", $fornecedor);
$tipoacordoA = explode(",", $tipoacordo);


$insert = new Insert();
$i = 0;
foreach ($tipoacordoA as $tipoacordo) {
    $i + 1;

    $insertAceitarAcordo = $insert->insertAceitarTipoAcordo($oracle, $dataInicio, $dataFim, $fornecedorA[$i], $tipoacordoA[$i]);

    $i++;
}
