<?php
$dataInicial = $_GET['dataInicialPesquisa'];
$dataFinal = $_GET['dataFinalPesquisa'];
$status = $_GET['status'];
$tipoContrato = $_GET['tipoContrato'];
?>
<table id="tabelaAcompanhamentosAcordos" class="table table-bordered text-center">
    <thead style="background-color: #00a550; color:white">
        <tr>
            <th class="text-center " scope="row">
                <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
            </th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Aberto</th>
            <th>Quitado</th>
            <th>Status</th>
            <th>Abrir</th>
            <th>Recusar</th>
        </tr>
    </thead>
    <tbody>


        <tr>
            <td class="text-center ">
                <input class="check " type="checkbox" value="" id="6">
            </td>
            <td class="Tipo">Bonificação</td>
            <td contenteditable="true" class="valor"> R$800,00 </td>
            <td class="Aberto">R$800,00</td>
            <td class="Quitado">R$ 00,00</td>
            <td class="Status">Pendente</td>
            <td class="Abrir"><i class="fas fa-external-link-alt"></i></td>
            <td><a href="#" style="font-size:20px; color:red" class="delete"><i class="fas fa-times"></i></a></td>
        </tr>
    </tbody>




</table>