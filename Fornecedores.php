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

        <title>Fornecedores</title>

        <link rel="icon" type="../base/image/png" href="../base/img/martband.png">
        <link rel="stylesheet" href="../base/fontawesome/fontawesome-free-5.15.3-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
        <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
        <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
        <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
        <link rel="stylesheet" href="../base/Buttons/css/buttons.dataTables.min.css" type="text/css">
        <link href="bootstrap-5.0.2/css/bootstrap.css" rel="stylesheet">
        <link href="../base/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">
        <link rel="stylesheet" href="css/style_Fornecedores.css" type="text/css">
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 1.2rem;">
                    <div style="font-weight: bold; background-color: #00a550; color:white" class="text-center card-header">Filtro</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Data Inicial
                                </label>
                                <input type="date" class="form-control dataInicialPesquisa" id="dataInicialPesquisa" style="text-align :center;">
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Data Final
                                </label>
                                <input type="date" class="form-control dataFinalPesquisa" id="dataFinalPesquisa" style="text-align :center;">
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Status
                                </label>
                                <select id="status" class="form-control">
                                    <option></option>
                                    <option value="4">Todos</option>
                                    <option value="5">five</option>
                                    <option value="6">six</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Tipo Contrato
                                </label>
                                <select id="tipoContrato" class="form-control">
                                    <option></option>
                                    <option value="4">Sellin</option>
                                    <option value="5">five</option>
                                    <option value="6">six</option>
                                </select>
                            </div>
                            <div class="col-lg-2" style="margin-top: 30px;">
                                <button type="button" id="pesquisarFiltroFornecedores" class="btn btnverde">Pesquisar</button>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card" style="margin-top: 1.2rem;">
                    <div style="font-weight: bold; background-color: #00a550; color:white" class="text-center card-header">Acompanhamentos Acordos</div>
                    <div class="card-body">
                        <div class="cadFunc ">
                            <div class="card-body ">

                                <div id="tabelaAcompanhamentosAcordos">
                                    <table id="tabelaAcompanhamentoAcordo" class="table table-bordered text-center">
                                        <thead style="background-color: #00a550; color:white">
                                            <tr>
                                                <th class="text-center " scope="row">
                                                    <input class="atrrcheckGerenciar" type="checkbox" value="" id="5">
                                                </th>
                                                <th class="ocultar">Identificador</th>
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
                                                <td class="id ocultar">111</td>
                                                <td class="Tipo">Bonificação</td>
                                                <td contenteditable="true" class="valor"> R$800,00 </td>
                                                <td class="Aberto">R$800,00</td>
                                                <td class="Quitado">R$ 00,00</td>
                                                <td class="Status">Pendente</td>
                                                <td class="Abrir"><i class="fas fa-external-link-alt"></i></td>
                                                <td><a href="#" style="font-size:20px; color:red" class="delete"><i class="fas fa-times"></i></a></td>


                                            </tr>
                                            <tr>
                                                <td class="text-center ">
                                                    <input class="check" type="checkbox" value="" id="7">
                                                </td>
                                                <td class="id ocultar">112</td>
                                                <td class="Tipo">Inauguração</td>
                                                <td contenteditable="true" class="valor">R$ 1500,00</td>
                                                <td class="Aberto">R$ 1500,00</td>
                                                <td class="Quitado">R$ 00,00</td>
                                                <td class="Status">Pendente</td>
                                                <td class="Abrir"><i class="fas fa-external-link-alt"></i></td>
                                                <td><a href="#" style="font-size:20px; color:red" class="delete"><i class="fas fa-times"></i></a></td>


                                            </tr>
                                            <tr>
                                                <td class="text-center ">
                                                    <input class="check" type="checkbox" value="" id="8">
                                                </td>
                                                <td class="id ocultar">113</td>
                                                <td class="Tipo">Despesa</td>
                                                <td contenteditable="true" class="valor">R$ 2500,00</td>
                                                <td class="Aberto">R$ 2500,00</td>
                                                <td class="Quitado">R$ 00,00</td>
                                                <td class="Status">Pendente</td>
                                                <td class="Abrir"><i class="fas fa-external-link-alt"></i></td>
                                                <td><a href="#" style="font-size:20px; color:red" class="delete"><i class="fas fa-times"></i></a></td>

                                            </tr>
                                            <tr>
                                                <td class="text-center ">
                                                    <input class="check" type="checkbox" value="" id="9">
                                                </td>
                                                <td class="id ocultar">114</td>
                                                <td class="Tipo">Manutenção</td>
                                                <td contenteditable="true" class="valor">R$ 750,00</td>
                                                <td class="Aberto">R$ 500,00</td>
                                                <td class="Quitado">R$ 250,00</td>
                                                <td class="Status">Enviado</td>
                                                <td class="Abrir"><i class="fas fa-external-link-alt"></i></td>
                                                <td><a href="#" style="font-size:20px; color:red" class="delete"><i class="fas fa-times"></i></a></td>


                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <label> Total Pendente:
                                        </label>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <label> Sub Total:
                                        </label>
                                        <input class="form-control" min="0" type="number">
                                    </div>
                                    <div class="col-lg-2">
                                        <label> Total Filtrado:
                                        </label>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-lg-3 pt-4">

                                        <button type="button" id="aceitarAcompanhamentoAcordo" style="margin-top:10px;" class="btn btnverde"> Aceitar</button>
                                    </div>





                                </div>



                            </div>

                            <!-- <div class="col-12-lg" style="text-align:center"> -->

                            <!-- <button type="button" id="alterarAcordoFinanceiro" class="btn" style="background-color: #00a550; font-weight:bold; color:white; display:none"> Alterar

                                </button> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <section id="modalBody" class="align-items-center fecha"></section>


</body>
<script type="text/javascript" src="../BASE/mdb/js/jquery.min.js"></script>
<script src="js/script_fornecedores.js"></script>
<!-- <script type="text/javascript" src="mdb/js/mdb.min.js"></script> -->
<!-- <script type="text/javascript" src="../BASE/mdb/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../BASE/mdb/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../BASE/jquery_ui/jquery/jquery-ui.js"></script>
<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
<script src="../base/dist/sidenav.js"></script>
<script type="text/javascript" src="../base/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../BASE/Buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../base/JSZip/jszip.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../base/Buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="../BASE/formulario7/formulario/js/out/jquery.idealforms.js"></script>

<script>
    $('[data-sidenav]').sidenav();
</script>
<script>
    $('#tabelaAcompanhamentoAcordo').DataTable({
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