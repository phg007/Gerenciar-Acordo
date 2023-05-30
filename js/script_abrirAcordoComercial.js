$(".imprimir").on('click', function () {
    window.location.href = "ImprimirAcordoComercial.php"
});

$(".AbrirModal").on('click', function () {
    let id = $(this).parent().parent().find(".id").text();
    // let nome = $(".check:checked").closest("tr").find(".nome").toArray().map(function (nome){
    //     return $(nome).text();});
    let nome = $(this).parent().parent().find(".nome").text();
    let linha = $(this).parent().parent().find(".linha").text();
    let numAcordo = $(this).parent().parent().find(".numAcordo").text();
    let valorAcordo = $(this).parent().parent().find(".valorAcordo").text();
    let status = $(this).parent().parent().find(".status").text();
    
    console.log(id);
        
    $.ajax({
        url: "Modal/modalAbrirComercial.php",
        method: "get",
        data: 'id=' + id + '&nome=' + nome + '&linha=' + linha + '&numAcordo='+ numAcordo + '&valorAcordo=' + valorAcordo + '&status=' + status,
        success: function (modal) {
            $('#modalBody').empty().html(modal);
            $('#centralModalDanger').modal();
        }

    })
});

$('#aprovarAbrirAcordoComercial').on('click', function (a) {
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