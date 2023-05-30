<?php
$fornecedorPesquisa = $_GET['fornecedorPesquisa'];
$tipoPesquisa = $_GET['tipoPesquisa'];
?>
<link rel="icon" type="../base/image/png" href="../base/img/martband.png">
    <link rel="stylesheet" href="../base/fontawesome/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
    <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
    <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
    <link href="../base/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">
    <link rel="stylesheet" href="css/style_Financeiro.css" type="text/css">

<table id="financeiroQuitarAcordo" class="table table-bordered text-center">
    <thead style="background-color: #00a550; color:white">
        <tr>
            <th class="text-center ocultar" scope="row">
                <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
            </th>
            <th>Fornecedor</th>
            <th>Valor</th>
            <th>Data Lançamento</th>
            <th>Usuário Lançamento</th>
            <th>Tipo</th>

        </tr>
    </thead>

    <tbody>


        <tr>
            <td class="text-center ocultar">
                <input class="check " type="checkbox" value="" id="6">
            </td>
            <td class="fornecedor"><?= $fornecedorPesquisa ?></td>
            <td contenteditable="true" class="valor"> R$800,00 </td>
            <td class="dataLancamento">Não informado</td>
            <td class="usuarioLancamento">PHPAULO</td>
            <td class="tipo"><?= $tipoPesquisa ?> </td>


    </tbody>
</table>

<script type="text/javascript" src="../BASE/mdb/js/jquery.min.js"></script>
<script src="js/script_comercial.js"></script>
<script type="text/javascript" src="../BASE/mdb/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../BASE/mdb/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../BASE/jquery_ui/jquery/jquery-ui.js"></script>
<script src="../BASE/mdb/bootstrap/js/bootstrap.min.js"></script>
<script src="../BASE/mdb/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../base/dist/sidenav.js"></script>
<script type="text/javascript" src="../base/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="../base/JSZip/jszip.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.html5.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.print.min.js"></script>
<script src="../BASE/formulario7/formulario/js/out/jquery.idealforms.js"></script>
<script>
    $('[data-sidenav]').sidenav();
</script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="../BASE/formulario7/formulario/js/out/jquery.idealforms.js"></script>
<!-- <script src="../BASE/formulario7/formulario/js/i18n/jquery.idealforms.i18n.pt.js"></script> -->
<script>
    $('#financeiroQuitarAcordo').DataTable({
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