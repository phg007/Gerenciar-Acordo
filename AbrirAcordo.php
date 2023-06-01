<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!DOCTYPE html>

    <html lang="pt-br">
    <meta charset=utf-8 />





    <link rel="icon" type="../base/image/png" href="../base/img/martband.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
    <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
    <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
    <link href="bootstrap-5.0.2/css/bootstrap.css" rel="stylesheet">

    <link href="../base/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">

    <link rel="stylesheet" href="css/style_Fornecedores.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

</head>

<?php

$hoje = date('d/m/Y');
$hoje = implode('-', array_reverse(explode('/', $hoje)));
$ontem = date('Y-m-d', mktime(0, 0, 0, date(" m "), date(" d ") - 1, date(" Y ")));
include "../base/conexao_teste.php";
//include "../BASE/conexao_tovs.php";
// include "../BASE/menulateral.php";
include "../MobileNav/docs/index_menucomlogin.php";
include "config/php/fornecedoresCrud.php";
$loja = $_SESSION['LOJA'];

$acordos = new Acordo();
$codAcordo = $_GET["codAcordo"];
$seqFonecedor = $_GET["seqFornecedor"];
$buscarAcordosPorCodPorFornecedor = $acordos->buscarAcordoPorCodFornecedor($oracle, $codAcordo, $seqFonecedor)
//   echo $loja;
?>

<body style="background-color:#dcdcdc ;">
    <div class="container-fluid">
        <div class="buscando ocultar">
            <div class="toast_4 ">
                <div class="toast-content">
                    <div class="message">
                        <span class="text text-1" style="color: #1FA845">Buscando Vales Gerados!</span>
                        <span class="text text-2">Por Favor aguarde!!</span>
                    </div>
                </div>
                <div class="progress"></div>
            </div>
        </div>
        <div class="toast_2 ocultar" style="background-color: #FD5C5C">
            <div class="toast_2-content">
                <div class="message">
                    <span class="text text-1" style="color: #fff">Erro!</span><br>
                    <span class="text text-2" style="color: #fff">Preencha todos os campos!!</span>
                </div>
            </div>
            <div class="progress_2"></div>
        </div>

        <div class="toast_1 ocultar">
            <div class="toast-content">
                <div class="message">
                    <span class="text text-1" style="color: #1FA845">Sucesso!</span>
                    <span class="text text-2">Valor Inserido!!</span>
                </div>
            </div>
            <div class="progress"></div>
        </div>
        <a class="voltarFornecedor"><i class="fas fa-arrow-left voltarFornecedor btn-lg" style="font-size:40px; color:green"></i> </a>

        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight: bold; background-color: #00a550; color:white" class="text-center card-header"></div>
                    <div class="card-body">
                        <div class="cadFunc ">
                            <div class="card-body ">

                                <div id="tabelaGerenciar">
                                    <table id="RecusarAcordo" class="table table-bordered text-center">
                                        <thead style="background-color: #00a550; color:white">
                                            <tr>
                                                <th class="text-center " scope="row">
                                                    <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
                                                </th>
                                                <th>Nº acordos</th>
                                                <th>Valor</th>
                                                <th>Aberto</th>
                                                <th>Quitado</th>
                                                <th>Status</th>
                                                <th>Visualizar</th>
                                                <th>Detalhes</th>
                                                <th>Recusar</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($buscarAcordosPorCodPorFornecedor as $row) :
                                            ?>

                                                <tr>
                                                    <td class="text-center ">
                                                        <input class="check  " type="checkbox" value="" id="6">
                                                    </td>
                                                    <td class="NumAcordo id"><?= $row["NROACORDO"] ?></td>
                                                    <td contenteditable="false" class="Valor"> <?= $row["VLRACORDO"] ?> </td>
                                                    <td class="Aberto"><?= $row["VLRABERTO"] ?></td>
                                                    <td class="Quitado"><?= $row["VLRQUITADO"] ?></td>
                                                    <td class="Status">Pendente</td>
                                                    <td class="print"><i class="fa-solid fa-print"></i></td>
                                                    <td class="open"> <i class="fas fa-external-link-square-alt"></i></td>
                                                    <td class="recusar"><i class="fas fa-times" style="color:red"></i></i></td>


                                                </tr>
                                            <?php
                                            endforeach
                                            ?>

                                        </tbody>
                                    </table>
                                </div>



                                <div class="row">
                                    <div class="col-lg-2">
                                        <label>
                                            Total Pendente:
                                        </label>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <label>
                                            Sub Total:
                                        </label>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>
                                            Total Filtrado:
                                        </label>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-2 pt-4" style="margin-top: 12px;">
                                        <button type="button" id="aprovarAcordo" class="btn btnverde">Aprovar</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>

<section id="modalBody" class="align-items-center fecha"></section>




<script type="text/javascript" src="../BASE/mdb/js/jquery.min.js"></script>
<script src="js/script_AbrirAcordo.js"></script>
<!-- <script type="text/javascript" src="mdb/js/mdb.min.js"></script> -->
<!-- <script type="text/javascript" src="../BASE/mdb/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../BASE/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../BASE/mdb/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../BASE/jquery_ui/jquery/jquery-ui.js"></script>
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
<script src="../base/dist/sidenav.js"></script>
<script type="text/javascript" src="../base/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script>
    $('[data-sidenav]').sidenav();
</script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="../BASE/formulario7/formulario/js/out/jquery.idealforms.js"></script>
<!-- <script src="../BASE/formulario7/formulario/js/i18n/jquery.idealforms.i18n.pt.js"></script> -->
<script>
    $('#RecusarAcordo').DataTable({
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
            {
                text: 'Gerar',
                className: 'promo1'
            },
            'colvis'
        ]

    });
</script>