<?php
include "../../base/conexao_martdb.php";
include "php/fornecedorescrud.php";

$NumAcordo = $_GET['NumAcordo'];
$NROEMPRESA = $_GET['NROEMPRESA'];
$SEQFORNECEDOR = $_GET['SEQFORNECEDOR'];
$Valor = $_GET['Valor'];



$NumAcordoA = explode(",", $NumAcordo);
$NROEMPRESAA = explode(",", $NROEMPRESA);
$SEQFORNECEDORA = explode(",", $SEQFORNECEDOR);
$ValorA = explode(",", $Valor);


$insert = new Insert();
$i = 0;
foreach ($NumAcordoA as $NumAcordo) {
    $i + 1;

    $insertAceitarAcordodetalhado =
        $insert->insertAceitarAcordodetalhado($oracle, $NumAcordoA[$i], $NROEMPRESAA[$i], $SEQFORNECEDORA[$i], $ValorA[$i]);

    $i++;
}
