<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <head>

        <title>Filtro</title>

        <link rel="icon" type="../base/image/png" href="../base/img/martband.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../base/DataTables/datatables.min.css" />
        <link href="../base/jquery_ui/jquery/jquery-ui.css" rel="stylesheet">
        <link rel='stylesheet' href='http://fonts.googleapis.com/icon?family=Material+Icons' type='text/css'>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css">
        <link rel="stylesheet" href="../base/dist/sidenav.css" type="text/css">
        <link href="../base/css/bootstrap.css" rel="stylesheet">

        <link rel="stylesheet" href="../base/formulario7/formulario/css/jquery.idealforms.css">

        <link rel="stylesheet" href="css/style_Comercial.css" type="text/css">
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
    $loja = $_SESSION['LOJA'];
    //   echo $loja;

    ?>




<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 3rem;">
                    <div style="font-weight: bold; background-color: #00a550; color: white;" class="card-header text-center ">FILTRO</div>