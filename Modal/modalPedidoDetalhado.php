<?php

include "../../base/conexao_teste.php";
$ID = $_GET['id'];
$ID = ltrim($ID);
?>

<script type="text/javascript" src="../../BASE/mdb/js/bootstrap.min.js"></script>
<div class="modal fade bd-example-modal-lg" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div style="background-color: #00a550; color:white;" class="modal-header">

                <!-- <h5 class="modal-title" id="exampleModalLabel">Motivo da Recusa</h5> -->

                <button type="button " style="background-color: #ECECEC; color:red;" class="close" data-dismiss="modal" aria-label="Fechar">

                    X

                </button>

            </div>

            <div class="modal-body">
                <div class="col-lg-12">
                    <div id="tabelaModal">
                        <table id="tabelModal" class="table table-bordered">
                            <thead style="background-color: #00a550; color:white">
                                <tr>
                                    <th class="text-center " scope="row">
                                        <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
                                    </th>
                                    <th class="ocultar">Identificador</th>
                                    <th>Cod produto</th>
                                    <th>Desc Prod</th>
                                    <th>Valor</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxx</th>
                                    <th>xxxx</th>
                                    <th>xx</th>

                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td class="text-center ">
                                        <input class="check " type="checkbox" value="" id="6">
                                    </td>
                                    <td class="id ocultar">111</td>
                                    <td class="Tipo">xxxxxx</td>
                                    <td contenteditable="true" class="valor"> xxxxxxx </td>
                                    <td class="Aberto">xxxxxx</td>
                                    <td class="Quitado">xxxxxx</td>
                                    <td class="Status">xxxxxx</td>
                                    <td class="Abrir">xxxxxx</td>
                                    <td>xxxxxx</td>


                                </tr>
                                <tr>
                                    <td class="text-center ">
                                        <input class="check" type="checkbox" value="" id="7">
                                    </td>
                                    <td class="id ocultar">112</td>
                                    <td class="Tipo">xxxxxx</td>
                                    <td contenteditable="true" class="valor"> xxxxxx</td>
                                    <td class="Aberto"> xxxxxx</td>
                                    <td class="Quitado">xxxxxx</td>
                                    <td class="Status">xxxxxx</td>
                                    <td class="Abrir">xxxxxx</td>
                                    <td>xxxxxx</td>


                                </tr>
                                <tr>
                                    <td class="text-center ">
                                        <input class="check" type="checkbox" value="" id="8">
                                    </td>
                                    <td class="id ocultar">113</td>
                                    <td class="Tipo">xxxxxx</td>
                                    <td contenteditable="true" class="valor">xxxxxx</td>
                                    <td class="Aberto">xxxxxx</td>
                                    <td class="Quitado">xxxxxx</td>
                                    <td class="Status">xxxxxx</td>
                                    <td class="Abrir">xxxxxx></td>
                                    <td>xxxxxx</td>

                                </tr>
                                <tr>
                                    <td class="text-center ">
                                        <input class="check" type="checkbox" value="" id="9">
                                    </td>
                                    <td class="id ocultar">114</td>
                                    <td class="Tipo">xxxxxx</td>
                                    <td contenteditable="true" class="valor">xxxxxx</td>
                                    <td class="Aberto">xxxxxx</td>
                                    <td class="Quitado">xxxxxx</td>
                                    <td class="Status">xxxxxx</td>
                                    <td class="Abrir">xxxxxx></td>
                                    <td>xxxxxx</td>


                                </tr>
                            </tbody>




                        </table>

                    </div>

                </div>


            </div>

            <div class="modal-footer">

                <!-- <button type="button" class="btn btnn" style=color:red data-dismiss="modal">Fechar</button> -->

                <!-- <button type="button" class="btn btnnverde Reprovar" value="Reprovado" style="background-color: #00a550;color: white;font-weight:bold;" data-toggle="modal" data-target="#exampleModal">

                    Salvar

                </button> -->

            </div>

        </div>

    </div>

</div>
<script>
$('#tabelModal').DataTable({
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
            'colvis'
        ]

    });
</script>