<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <head>

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
    </head>
    <?php
    include "../base/conexao_teste.php";
    include "../BASE/conexao_tovs.php";
    include "../MobileNav/docs/index_menucomlogin.php";
    ?>

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
                                    Loja
                                </label>
                                <select id="loja" class="form-control" aria-label="Default select example">
                                    <option selected>Enviado</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 pt-4">
                                <button type="button" id="pesquisarDesligamentos" style="background-color: #00a550 ;color: white;font-weight:bold" class="btn">Pesquisar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card" style="margin-top: 3rem;">
                <div style="font-weight: bold; background-color: #00a550; color: white;" class="card-header text-center"> DESLIGAMENTOS</div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: #00a550; color: white;">
                            <tr>
                                <th>Chapa</th>
                                <th>Nome</th>
                                <th>Loja</th>
                                <th>Setor</th>
                                <th>Tipo de Desligamento</th>
                                <th>Motivo de Desligamento</th>
                                <th>Visualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>xxxxxx</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td class="abrir"><i class="fa-solid fa-share"></i></td>
                            </tr>
                            <tr>
                                <td>XXXXXXX</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td class="abrir"><i class="fa-solid fa-share"></i></td>
                            </tr>
                            <tr>
                                <td>XXXXXXX</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>XXXXXXX</td>
                                <td>xxxxxx</td>
                                <td class="abrir"><i class="fa-solid fa-share"></i></td>
                            </tr>
                            <tr>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xxxxxx</td>
                                <td class="abrir"><i class="fa-solid fa-share"></i></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>