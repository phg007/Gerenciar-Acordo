<?php
$dataInicial = $_GET['dataInicial'];
$dataFinal = $_GET['dataFinal'];
?>
<table id="comercialAcordo" class="table table-bordered text-center">
    <thead style="background-color: #00a550; color:white; ">
        <tr>
            <td class="text-center" scope="row">

                <input class="check" type="checkbox" value="" id="1">


            </td>
            <th class="text-center ocultar" scope="row">
                <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
            </th>
            <th>Nº Acordo</th>
            <th>Valor</th>
            <th>Pagar</th>
            <th>Pendente</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center ">
                <input class="check" type="checkbox" value="" id="6">
            </td>
            <td class="seqAcordo ocultar"> 1 </td>
            <td class="numAcordo">Bonificação</td>
            <td class="valorAcordo">R$ 800,00</td>
            <td class="pagar">Não informado</td>
            <td class="pendente">R$ 800,00</td>
        </tr>

    </tbody>
</table>
<script>
$('#comercialAcordo').DataTable({
        dom: 'Bfrtip',

        "language": {

            "sEmptyTable": "Nenhum registro encontrado",

            "sInfo": " _START_ até _END_ de _TOTAL_ registros...  ",

            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",

            "sInfoFiltered": "(Filtrados de _MAX_ registros)",

            "sInfoPostFix": "",

            "sInfoThousands": ".",

            "sLengthMenu": "_MENU_ resultados por página",

            "sLoadingRecords": "Carregando...",

            "sProcessing": "Processando...",

            "sZeroRecords": "Nenhum registro encontrado",

            "sSearch": "Pesquisar",

            "oPaginate": {

                "sNext": "Próximo",

                "sPrevious": "Anterior",

                "sFirst": "Primeiro",

                "sLast": "Último"

            },

        },
        buttons: [{
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0, ':visible']
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [0, ':visible']
                }
            },
            
        ]

    });


   
</script>