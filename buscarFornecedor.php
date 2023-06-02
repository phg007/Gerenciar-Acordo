<?php
include "../base/conexao_martdb.php";

include "config/php/fornecedoresCrud.php";
$comprador = $_GET['comprador'];
$comercial = new Comercial();
$fornecedor = $comercial->buscarFornecedor($oracle,$comprador);

echo $comprador ;

?>



<label>FORNECEDOR:</label>
<select class="form-control py-2 center loja " id="fornger" name="fornger">
    <?php

    foreach ($fornecedor as $row) :?>

    <option value="<?=$row["SEQFORNECEDOR"]?>"><?=$row["NOMERAZAO"]?></option>

    <?php
        endforeach
        ?>
</select>