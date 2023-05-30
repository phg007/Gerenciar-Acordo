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

    <head>

        <title>Financeiro</title>

        <link rel="icon" type="../base/image/png" href="../base/img/martband.png">
        <link rel="stylesheet" href="../base/fontawesome/fontawesome-free-5.15.3-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
        <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
        <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
        <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
        <link href="bootstrap-5.0.2/css/bootstrap.css" rel="stylesheet">
        <link href="../base/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">
        <link rel="stylesheet" href="css/style_Financeiro.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="../base/Buttons/css/buttons.dataTables.min.css">
    </head>
    <?php
    include "../base/conexao_teste.php";
    include "../BASE/conexao_tovs.php";
    include "../MobileNav/docs/index_menucomlogin.php";
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
                    <span class="text text-2" style="color: #fff">Preencha todos os campos!</span>
                </div>
            </div>
        </div>
        <div class="toast_3 ocultar" style="background-color: #FD5C5C">
            <div class="toast-content">
                <div class="message">
                    <span class="text text-1" style="color: #fff">Erro!</span><br>
                    <span class="text text-2" style="color: #fff">Não existe valor para quitar!!</span>
                </div>
            </div>

            <div class="progress_3"></div>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight: bold; background-color: #00a550; color:white" class="text-center card-header">Informe Valor</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3">
                                <label class="form-label">
                                    Fornecedor
                                </label>
                                <select id="fornecedor" class="form-control">
                                    <option></option>
                                    <option value="4">XXXXXXXXX</option>
                                    <option value="5">five</option>
                                    <option value="6">six</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">
                                    Tipo
                                </label>
                                <select id="tipo" class="form-control">
                                    <option></option>
                                    <option value="4">bonificação</option>
                                    <option value="5">five</option>
                                    <option value="6">six</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Valor</label>
                                <div>
                                    <input type="number" class="form-control informeValor" id="informeValor" style="text-align :center;">
                                </div>
                            </div>

                            <div class="col-lg-1" style="text-align: right;  ">
                                <button type="button" id="enviarFinanceiro" style="background-color:#00a550; margin-top:40%; margin-right:10%; color:white; font-weight:bold;" class="btn">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gerenciar valor -->
            <div class="col-lg-12">

                <div class="card" style="margin-top: 3rem;">
                    <h5 style="font-weight:bold; color:white; background-color:#00a550;" class="text-center card-header">Gerenciar Valor<a href="#" id="maximizarCardGerenciarValor" class="none"> <i class="fa-regular fa-square-plus "></i></a><a href="#" id="minimizarCardGerenciarValor"> <i class="fa-regular fa-square-minus"></i></a>
                    </h5>
                    <div class="cadFunc ">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-3">
                                    <label class="form-label">
                                        Fornecedor
                                    </label>
                                    <select id="fornecedorPesquisa" class="form-control">
                                        <option></option>
                                        <option value="4">XXXXXXXXX</option>
                                        <option value="5">five</option>
                                        <option value="6">six</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label class="form-label">
                                        Tipo
                                    </label>
                                    <select id="tipoPesquisa" class="form-control">
                                        <option></option>
                                        <option value="4">bonificação</option>
                                        <option value="5">five</option>
                                        <option value="6">six</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 pt-4">
                                    <button type="button" id="pesquisarGerenciarValor" style="background-color: #00a550 ;color: white;font-weight:bold; " class="btn">Pesquisar</button>
                                </div>
                            </div>
                            <div id="tabelaGerenciar">
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
                                            <td class="fornecedor">Bonificação</td>
                                            <td contenteditable="true" class="valor"> R$800,00 </td>
                                            <td class="dataLancamento">Não informado</td>
                                            <td class="usuarioLancamento">PHPAULO</td>
                                            <td class="tipo">Bonificação </td>


                                        </tr>
                                        <tr>
                                            <td class="text-center ocultar">
                                                <input class="check" type="checkbox" value="" id="7">
                                            </td>
                                            <td class="fornecedor">Inauguração</td>
                                            <td contenteditable="true" class="valor">R$ 1500,00</td>
                                            <td class="dataLancamento">R$ 1500,00</td>
                                            <td class="usuarioLancamento">PHPAULO</td>
                                            <td class="tipo">Bonificação </td>


                                        </tr>
                                        <tr>
                                            <td class="text-center ocultar">
                                                <input class="check" type="checkbox" value="" id="8">
                                            </td>
                                            <td class="fornecedor">Despesa</td>
                                            <td contenteditable="true" class="valor">R$ 2500,00</td>
                                            <td class="dataLancamento">Não informado</td>
                                            <td class="usuarioLancamento">PHPAULO</td>
                                            <td class="tipo">Bonificação </td>

                                        </tr>
                                        <tr>
                                            <td class="text-center ocultar">
                                                <input class="check" type="checkbox" value="" id="9">
                                            </td>
                                            <td class="fornecedor">Manutenção</td>
                                            <td contenteditable="true" class="valor">R$ 750,00</td>
                                            <td class="dataLancamento">R$ 500,00</td>
                                            <td class="usuarioLancamento"> PHPAULO</td>
                                            <td class="tipo">Bonificação </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>

                        <div class="col-12-lg" style="text-align:center">

                            <button type="button" id="alterarAcordoFinanceiro" class="btn" style="background-color: #00a550; font-weight:bold; color:white; display:none"> Alterar

                            </button>
                        </div>
                    </div>

                </div>



            </div>
            <!-- NÂO MEXER -->
            <div class="col-lg-12">
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight:bold; color:white; background-color:#00a550;" class="text-center card-header">Quitar Acordos <a href="#" id="maximizarCardAcordo" class="none"> <i class="fa-regular fa-square-plus"></i></a><a href="#" id="minimizarCardAcordo"> <i class="fa-regular fa-square-minus"></i></a> </div>
                    <div class="card-body cardQuitarAcordo">
                        <div id="tabelaAcordo">
                            <table id="quitarAcordo" class="table table-bordered text-center">

                                <thead style="background-color: #00a550; color:white">
                                    <tr>
                                        <th class="text-center " scope="row">
                                            <input class="atrrcheck" type="checkbox" value="" id="5">
                                        </th>
                                        <th class="ocultar">seqAcordo</th>
                                        <th>Nº Acordo</th>
                                        <th>Valor</th>
                                        <th>Pagar</th>
                                        <th>Pendente</th>

                                    </tr>
                                </thead>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-2"> <label for="validationCustom02" class="form-label"> Data Inicial: </label> <input type="date" id="dataInicial" class="form-control" aria-label="Default"> </div>
                                        <div class="col-lg-2"> <label for="validationCustom02" class="form-label"> Data Final: </label> <input type="date" id="dataFinal" class="form-control" aria-label="Default"> </div>
                                        <div class="col-lg-2 pt-4">
                                            <button type="button" id="pesquisarGerenciarAcordo" style="background-color: #00a550 ;color: white;font-weight:bold; " class="btn">Pesquisar</button>
                                        </div>
                                        <div class="alterarTbody">
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
                                                <tr>
                                                    <td class="text-center ">
                                                        <input class="check" type="checkbox" value="" id="7">
                                                    </td>
                                                    <td class="seqAcordo ocultar"> 2 </td>
                                                    <td class="numAcordo">Inauguração</td>
                                                    <td class="valorAcordo">R$ 1500,00</td>
                                                    <td class="pagar">R$ 1500,00</td>
                                                    <td class="pendente">R$ 0,00</td>


                                                </tr>
                                                <tr>
                                                    <td class="text-center ">
                                                        <input class="check" type="checkbox" value="" id="8">
                                                    </td>
                                                    <td class="seqAcordo ocultar"> 3 </td>
                                                    <td class="numAcordo">Despesa</td>
                                                    <td class="valorAcordo">R$ 2500,00</td>
                                                    <td class="pagar">Não informado</td>
                                                    <td class="pendente">R$ 2500,00</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-center ">
                                                        <input class="check" type="checkbox" value="" id="9">
                                                    </td>
                                                    <td class="seqAcordo ocultar"> 4 </td>
                                                    <td class="numAcordo">Manutenção</td>
                                                    <td class="valorAcordo">R$ 750,00</td>
                                                    <td class="pagar">R$ 500,00</td>
                                                    <td class="pendente"> R$ 250,00</td>

                                                </tr>
                                            </tbody>
                                        </div>
                            </table>
                        </div>
                        <div class="col-12-lg" style="text-align:center">

                            <button type="button" id="quitarAcordoFinanceiro" class="btn" style="background-color: #00a550; font-weight:bold; color:white;"> Quitar

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../BASE/mdb/js/jquery.min.js"></script>
<script src="js/script_financeiro.js"></script>
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../BASE/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../BASE/mdb/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../BASE/jquery_ui/jquery/jquery-ui.js"></script>
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
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
    $('#quitarAcordo').DataTable({
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

</html>