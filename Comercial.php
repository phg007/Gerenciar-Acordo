<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <title>Comercial</title>

    <link rel="icon" type="../base/image/png" href="../base/img/martband.png">
    <link rel="stylesheet" href="../base/fontawesome/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
    <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
    <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
    <link href="../base/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">
    <link rel="stylesheet" href="css/style_Comercial.css" type="text/css">
    <?php
    include "../base/conexao_teste.php";
    include "../BASE/conexao_tovs.php";
    include "../MobileNav/docs/index_menucomlogin.php";
    ?>
</head>

<body>
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
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight: bold; background-color: #00a550; color: white;" class="card-header text-center ">FILTRO</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class=" col-lg-2">
                                <label for="validationCustom02" class="form-label">
                                    Data Inicial:
                                </label>

                                <input type="date" id="dataInicial" class="form-control" aria-label="Default">
                            </div>
                            <div class="col-lg-2">
                                <label for="validationCustom02" class="form-label">
                                    Data Final:
                                </label>
                                <input type="date" id="dataFinal" class="form-control" aria-label="Default">
                            </div>
                            <div class="col-lg-2">
                                <label for="validationCustom02" class="form-label">
                                    Status
                                </label>
                                <select id="status" class="form-control" aria-label="Default select example">
                                    <option selected>Enviado</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="validationCustom02" class="form-label">
                                    Fornecedor
                                </label>
                                <select id="fornecedor" class="form-control" aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 pt-4">
                                <button type="button" id="pesquisarAcordoComercial" style="background-color: #00a550 ;color: white;font-weight:bold" class="btn">Pesquisar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight: bold; background-color: #00a550; color: white;" class="card-header text-center ">ACORDOS</div>
                    <div class="card-body">
                        <div id="tableComercial">

                            <table id="comercialAcordo" class="table table-bordered text-center">
                                <thead style="background-color: #00a550; color:white; ">
                                    <tr>
                                        <td class="text-center" scope="row">

                                            <input class="selecionarTodosCheck" type="checkbox" value="" id="1">


                                        </td>
                                        <th>Nome</th>
                                        <th>Linha</th>
                                        <th>Nº</th>
                                        <th>Valor </th>
                                        <th>Status </th>
                                        <th>Abrir </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class="text-center" scope="row">
                                            <input class="check" type="checkbox" value="" id="2">
                                        </td>
                                        <td class="nome">pedro</td>
                                        <td class="linha">Bebida</td>
                                        <td class="numAcordo">Acordo</td>
                                        <td class="valorAcordo">R$800,00</td>
                                        <td class="status">Enviado</td>
                                        <td class="abrir"><i class="fas fa-sign-out-alt"></i> </td>



                                    </tr>

                                    <tr>
                                        <td class="text-center" scope="row">
                                            <div class="check">
                                                <input class="check" type="checkbox" value="" id="3">

                                            </div>
                                        </td>
                                        <td class="nome">paulo</td>
                                        <td class="linha">Mercearia</td>
                                        <td class="numAcordo">Acordo</td>
                                        <td class="valorAcordo">R$1500,00</td>
                                        <td class="status">Enviado</td>
                                        <td class="abrir"><i class="fas fa-sign-out-alt"></i> </td>

                                    </tr>
                                    <tr>
                                        <td class="text-center" scope="row">
                                            <div class="check">
                                                <input class="check" type="checkbox" value="" id="4">

                                            </div>
                                        </td>
                                        <td class="nome">guilherme</td>
                                        <td class="linha">Bazar</td>
                                        <td class="numAcordo">Acordo</td>
                                        <td class="valorAcordo">R$2500,00</td>
                                        <td class="status">Enviado</td>
                                        <td class="abrir"><i class="fas fa-sign-out-alt"></i> </td>

                                    </tr>

                                    <tr>
                                        <td class="text-center" scope="row">
                                            <div class="check">
                                                <input class="check" type="checkbox" value="" id="5">

                                            </div>
                                        </td>
                                        <td class="nome">joao</td>
                                        <td class="linha">Bomboniere</td>
                                        <td class="numAcordo">Acordo</td>
                                        <td class="valorAcordo">R$750,00</td>
                                        <td class="status">Enviado</td>
                                        <td class="abrir"><i class="fas fa-sign-out-alt"></i> </td>
                                        <a href="google.com"></a>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12 pt-4" style="text-align: right;">
                            <button type="button" id="aprovarAcordoComercial" style="background-color: #00a550 ;color: white;font-weight:bold; " class="btn">Aprovar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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


</html>