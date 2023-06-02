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
    <link rel="stylesheet" href="../BASE/cssGeral.css" type="text/css">
    <?php
    include "../base/conexao_teste.php";

    include "../MobileNav/docs/index_menucomlogin.php";
    include "config/php/fornecedoresCrud.php";
    //$buscarAcordoPorTipo = buscarAcordoPorTipo($oracle);
    $datas = new Data();
    $dataIniciomes =  $datas->dataIniciomes();
    $dataFimMes = $datas->dataFimMes();

    $comercial = new Comercial();
    $comprador = $comercial->buscarComprador($oracle);
    $acordos = new Acordo();
    $buscarAcordoPorTipo = $acordos->buscarAcordoPorTipo($oracle);
    $tipoDeContrato = $acordos->tipoDeContrato($oracle);
    ?>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 1rem;">
                    <div style="font-weight: bold; background-color: #00a550; color: white;" class="card-header text-center ">Informar Valor</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-2">
                                <label class="form-label">
                                    Data Inicial:
                                </label>
                                <input value="<?= $dataIniciomes ?>" type="date" class="form-control dataInicialPesquisa" id="dataInicialPesquisa">

                            </div>
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Data Final:
                                </label>
                                <input value="<?= $dataFimMes ?>" type="date" class="form-control dataFinalPesquisa" id="dataFinalPesquisa">
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label">
                                    Status:
                                </label>
                                <select id="status" class="form-control">

                                    <option value="Pendente">Pendente</option>
                                    <option value="Enviado">Aceito</option>
                                    <option value="Enviado">Aceito Parcialmente</option>
                                    <option value="Concluído">Quitado</option>
                                    <option value="Concluído">Quitado Parcialmente</option>


                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="validationCustom02" class="form-label">
                                    Comprador:
                                </label>
                                <select id="comprador" class="form-control" aria-label="Default select example">
                                    <option>
                                        <option />
                                        <?php
                                        foreach ($comprador as $row) :
                                        ?>
                                    <option value="<?= $row["SEQCOMPRADOR"] ?>"><?= $row["APELIDO"] ?></option>
                                <?php
                                        endforeach
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group atualizarforn">
                                    <label for="validationCustom02" class="form-label">
                                        Fornecedor:
                                    </label>
                                    <select id="fornecedor" class="form-control" aria-label="Default select example">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 pt-4">
                                <button type="button" id="pesquisarAcordoComercial" style="background-color: #00a550 ;color: white;font-weight:bold" class="btn">Pesquisar</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card" style="margin-top: 1rem;">
                    <div class="card-body">
                        <div id="tableComercial">

                            <table id="comercialAcordo" class="table table-bordered text-center">
                                <thead style="background-color: #00a550; color:white; ">
                                    <tr>
                                        <th class="text-center" scope="row">

                                            <input class="selecionarTodosCheck" type="checkbox" value="" id="1">
                                        </th>
                                        <th>Nº</th>
                                        <th>Tipo</th>
                                        <th>Fornecedor</th>

                                        <th>Valor </th>
                                        <th>Pagar</th>
                                        <th>Status </th>
                                        <th style="display:none">Abrir </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($buscarAcordoPorTipo as $row) :
                                    ?>

                                        <tr>
                                            <td class="text-center ">
                                                <input class="check" type="checkbox" value="<?= $row["CODTIPOACORDO"] ?>" id="6">
                                            </td>
                                            <td class="CODTIPOACORDO"><?= $row["CODTIPOACORDO"] ?></td>
                                            <td class="Tipo"><?= $row["DESCRICAO"] ?></td>

                                            <td class="SEQFORNECEDOR"><?= $row["SEQFORNECEDOR"] ?></td>



                                            <td class="valorAcordo"><?= $row["VLRTOTAL"] ?></td>

                                            <td contenteditable="true" class=""><?= $row["VLRTOTAL"] ?></td>
                                            <td class="status">Acieto</td>
                                            <td style="display:none" class="abrir"><i class="fas fa-sign-out-alt"></i> </td>



                                        </tr>
                                    <?php
                                    endforeach
                                    ?>


                                </tbody>
                            </table>
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
            {
                text: 'Aprovar',
                className: 'Informar,',
                id: 'meuId'
            },

        ]
    });
</script>


</html>