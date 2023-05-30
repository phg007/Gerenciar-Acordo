<?php
$dataInicial = $_GET['dataInicial'];
$dataFinal = $_GET['dataFinal'];
$status = $_GET['status'];
$fornecedor = $_GET['fornecedor'];

?>

<table id="comercialAcordoTabela" class="table table-bordered text-center">
    <thead style="background-color: #00a550; color:white; ">
        <tr>
            <td class="text-center" scope="row">

                <input class="check" type="checkbox" value="" id="1">


            </td>
            <th>Nome</th>
            <th>Linha</th>
            <th>Nº</th>
            <th>Valor</th>
            <th>Status</th>
            <th>Abrir</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="text-center" scope="row">
                <input class="check" type="checkbox" value="" id="2">
            </td>
            <td class="nome">pedro</td>
            <td class="linha">Bebida</td>
            <td class="numAcordo">280</td>
            <td class="valorAcordo">R$800,00</td>
            <td class="status">Enviado</td>
            <td class="abrir"><i class="fas fa-sign-out-alt"></i> </td>




        </tr>





    </tbody>
</table>
<script src="js/script_comercial.js"></script>
<script>
    $('#comercialAcordoTabela').DataTable({
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
