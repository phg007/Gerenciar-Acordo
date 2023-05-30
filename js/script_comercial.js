// funcao pesquisar filtro
$('#pesquisarAcordoComercial').on('click', function (a) {

    a.preventDefault();
    let dataInicial = $("#dataInicial").val();
    let dataFinal = $("#dataFinal").val();
    let status = $("#status").val();
    let fornecedor = $("#fornecedor").val();

    console.log(dataInicial);
    console.log(dataFinal);
    console.log(status);
    console.log(fornecedor);
    if (dataInicial == '' || dataFinal == '' || fornecedor == '' || status == '') {
        const toast = document.querySelector(".toast_2"),

            progress_2 = document.querySelector(".progress_2");




        toast.classList.remove("ocultar");

        progress_2.classList.remove("ocultar");

        $(".toast_2").removeClass("ocultar");

        timer1 = setTimeout(() => {

            toast.classList.add("ocultar");

            $(".toast_2").addClass("ocultar");

        }, 2000);
    }
    else {
        $.ajax({
            url: "filtros/filtro_acordoComercial.php",
            method: 'get',
            data: 'dataInicial=' + dataInicial + '&dataFinal=' + dataFinal + '&fornecedor=' + fornecedor + '&status=' + status,
            success: function (promocao) {
                $("#tableComercial").empty().html(promocao);




            }
        });
    }
});




// funcao icone abrir acordo
// $('.print').on('click', function (a) {
//     a.preventDefault();

//     const id = $(this).text();
//     const nome = $(this).parent().parent().find(".nome").text();
//     console.log(nome);
//     const linha = $(this).parent().parent().find(".linha").text();
//     console.log(linha);
//     const numero = $(".numAcordo").text();
//     console.log(numero);
//     const valor = $(this).parent().parent().find(".valorAcordo").text();
//     console.log(valor);

//     const status = $(this).parent().parent().find(".status").text();


//     window.location.href = "gerarAcordo.php" + id + "&linha= " + linha + "&nome= " + nome + "&valor= " + valor + "&status= " + status;

// })
//funcao para selecionar todos checkbox
$(".selecionarTodosCheck").on("click", function (e) {

    if ($(".check").is(":checked")) {

        $(".check").prop("checked", false);

    } else {

        $(".check").prop("checked", true);
    }

});

$('#aprovarAcordoComercial').on('click', function (a) {
    var checkede = $(".check:checked").length;
    if (checkede==0) {
        const toast = document.querySelector(".toast_2"),

            progress_2 = document.querySelector(".progress_2");




        toast.classList.remove("ocultar");

        progress_2.classList.remove("ocultar");

        $(".toast_2").removeClass("ocultar");

        timer1 = setTimeout(() => {

            toast.classList.add("ocultar");

            $(".toast_2").addClass("ocultar");

        }, 2000);
    
        
    }
    else {

        let nome = $(".check:checked").closest("tr").find(".nome").toArray().map(function (nome){
            return $(nome).text();
        });
        let linha = $(".check:checked").closest("tr").find(".linha").toArray().map(function (linha){
            return $(linha).text();
        });
        
        let numAcordo = $(".check:checked").closest("tr").find(".numAcordo").toArray().map(function (numAcordo){
            return $(numAcordo).text();
        });
        let valorAcordo = $(".check:checked").closest("tr").find(".valorAcordo").toArray().map(function (valorAcordo){
            return $(valorAcordo).text();
        });
        let status = $(".check:checked").closest("tr").find(".status").toArray().map(function (status){
            return $(status).text();
        });
        console.log(nome);
        console.log(linha);
        console.log(numAcordo);
        console.log(valorAcordo);
        console.log(status);
    }
});
$(".abrir").on('click', function () {
    window.location.href = 'abrirAcordoComercial.php'

});











