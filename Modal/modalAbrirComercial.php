<?php

include "../../base/conexao_teste.php";
$ID = $_GET['id'];
$nome = $_GET['nome'];
$linha = $_GET['linha'];
$numAcordo = $_GET['numAcordo'];
$valorAcordo = $_GET['valorAcordo'];
$status = $_GET['status'];

?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>


<div class="modal fade bd-example-modal-lg" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div style="background-color: #00a550; color:white;" class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Detalhamento</h5>

                <button type="button " style="background-color: #ECECEC; color:red;" class="close" data-dismiss="modal" aria-label="Fechar">

                    X

                </button>

            </div>

            <div class="modal-body">
                <div class="col lg-12">
                    <table id="tabelaModalComercial" class="table table-bordered text-center">
                        <thead style="background-color: #00a550; color:white; ">
                            <tr>
                                <th class="ocultar"></th>
                                <th>Nome</th>
                                <th>Linha</th>
                                <th>Nº</th>
                                <th>Valor </th>
                                <th>Status </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               
                                <td class="id ocultar">111</td>
                                <td class="nome">xxxxxx</td>
                                <td class="linha"> xxxxxxx </td>
                                <td class="numAcordo">xxxxxx</td>
                                <td class="valorAcordo">xxxxxx</td>
                                <td class="status">xxxxxx</td>

                            </tr>
                            <tr>
                                
                                <td class="id ocultar">112</td>
                                <td class="nome">xxxxxx</td>
                                <td class="linha"> xxxxxx</td>
                                <td class="numAcordo"> xxxxxx</td>
                                <td class="valorAcordo">xxxxxx</td>
                                <td class="status">xxxxxx</td>


                            </tr>
                            <tr>
                                
                                <td class="id ocultar">113</td>
                                <td class="nome">xxxxxx</td>
                                <td class="linha">xxxxxx</td>
                                <td class="numAcordo">xxxxxx</td>
                                <td class="valorAcordo">xxxxxx</td>
                                <td class="status">xxxxxx</td>

                            </tr>
                            <tr>
                            
                                <td class="id ocultar">114</td>
                                <td class="nome">xxxxxx</td>
                                <td class="linha">xxxxxx</td>
                                <td class="numAcordo">xxxxxx</td>
                                <td class="valorAcordo">xxxxxx</td>
                                <td class="status">xxxxxx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal-footer">
        </div>
    </div>
</div>
<script type="text/javascript" src="../../BASE/mdb/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="../../base/DataTables/datatables.min.js"></script> -->
<script type="text/javascript" src="../base/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="../base/JSZip/jszip.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.html5.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.print.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../../base"></script>




<script>
    $('#tabelaModalComercial').DataTable({
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
