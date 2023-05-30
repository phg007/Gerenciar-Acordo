
$(".voltarFornecedor").on('click', function () {
    window.location.href = "Fornecedores.php"
});

$(".atrrcheckGerenciar").on("click", function () {

    if ($(".check").is(":checked")) {

        $(".check").prop("checked", false);

    } else {

        $(".check").prop("checked", true);

    }

});






$("#aprovarAcordo").on('click', function () {
    let verificarChecked = 0
    var checkede = $(".check").toArray().map(function (checkede) {
        let checkar = $(checkede).is(":checked");
        if (checkar == true) {
            verificarChecked = 1;
        }
    });
    if (verificarChecked == 0) {
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
        let NumAcordo = $(".check:checked").parent().parent().find(".NumAcordo").closest(".NumAcordo").toArray().map(function (NumAcordo) {
            return $(NumAcordo).text()
        });
        let Valor = $(".check:checked").parent().parent().find(".Valor").closest(".Valor").toArray().map(function (Valor) {
            return $(Valor).text()
        });

        let Aberto = $(".check:checked").parent().parent().find(".Aberto").closest(".Aberto").toArray().map(function (Aberto) {
            return $(Aberto).text()

        });
        let Quitado = $(".check:checked").parent().parent().find(".Quitado").closest(".Quitado").toArray().map(function (Quitado) {
            return $(Quitado).text()
        });
        let Status = $(".check:checked").parent().parent().find(".Status").closest(".Status").toArray().map(function (Status) {
            return $(Status).text()
        });






        console.log(NumAcordo);
        console.log(Valor)
        console.log(Aberto)
        console.log(Quitado)
        console.log(Status)
    }
});
$(".print").on('click', function () {
    window.location.href = "Imprimir.php"
});
$(".recusar").on('click', function () {
    let id = $(this).parent().parent().find(".id").text();
    $.ajax({
        url: "Modal/modalAbrirAcordo.php",
        method: "get",
        data: 'id=' + id,
        success: function (modal) {
            $('#modalBody').empty().html(modal);
            $('#centralModalDanger').modal();
        }

    })
});
$(".open").on('click', function () {
    let id = $(this).parent().parent().find(".id").text();
    $.ajax({
        url: "Modal/modalPedidoDetalhado.php",
        method: "get",
        data: 'id=' + id,
        success: function (modal) {
            $('#modalBody').empty().html(modal);
            $('#centralModalDanger').modal();

        }
    })


});