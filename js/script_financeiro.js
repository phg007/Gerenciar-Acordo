// funcao enviar valor
$('#enviarFinanceiro').on('click', function (a) {
    let fornecedor = $("#fornecedor").val();
    let tipo = $("#tipo").val();
    let valor = $("#informeValor").val();
    console.log(fornecedor);
    console.log(tipo);
    console.log(valor);
    if (valor == '' || tipo == '' || fornecedor == '') {
        const toast = document.querySelector(".toast_2"),

            progress_2 = document.querySelector(".progress_2");




        toast.classList.remove("ocultar");

        // progress_2.classList.remove("ocultar");

        $(".toast_2").removeClass("ocultar");

        timer1 = setTimeout(() => {

            toast.classList.add("ocultar");

            $(".toast_2").addClass("ocultar");

        }, 2000);
    }
    else {
        $.ajax({
            url: "config/informeValor.php",
            method: "get",
            data: 'fornecedor=' + fornecedor + '&tipo=' + tipo + '&valor=' + valor,
            success: function (promocao) {
                const toast = document.querySelector(".toast_1"),

                    progress_2 = document.querySelector(".progress");




                toast.classList.remove("ocultar");

                progress_2.classList.remove("ocultar");

                $(".toast_1").removeClass("ocultar");

                timer2 = setTimeout(() => {

                    toast.classList.add("ocultar");

                    $(".toast_1").addClass("ocultar");
                    window.location.href = "Financeiro.php"
                }, 2000);

                //$("#financeiiroAcordo").empty().html(promocao);
            }
        })
    }
});

//funcao botao quitar
$("#quitarAcordoFinanceiro").on("click", function (a) {
    a.preventDefault();
    let verificarChecked = 0;

    $(".check").toArray().forEach(function (element) {
        if ($(element).is(":checked")) {
            verificarChecked = 1;
        }
    });


    if (verificarChecked == 0) {
        const toast = document.querySelector(".toast_2"),

        progress_2 = document.querySelector(".progress_2");




    toast.classList.remove("ocultar");

    // progress_2.classList.remove("ocultar");

    $(".toast_2").removeClass("ocultar");

    timer4= setTimeout(() => {

        toast.classList.add("ocultar");

        $(".toast_2").addClass("ocultar");

    }, 2000);

}

    else {
        let pagar = $(".check:checked").parent().parent().find(".pagar").closest(".pagar").toArray().map(function (pagar) {
            return $(pagar).text();

        });

        if (pagar == 'Não informado') {
            const toast = document.querySelector(".toast_3"),

                progress_2 = document.querySelector(".progress_3");




            toast.classList.remove("ocultar");

            progress_2.classList.remove("ocultar");

            $(".toast_3").removeClass("ocultar");

            timer4= setTimeout(() => {

                toast.classList.add("ocultar");

                $(".toast_3").addClass("ocultar");

            }, 2000);

        }
        else {
            let numAcordo = $(".check:checked").parent().parent().find(".numAcordo").closest(".numAcordo").toArray().map(function (numAcordo) {
                return $(numAcordo).text()
            });
            let valorAcordo = $(".check:checked").parent().parent().find(".valorAcordo").closest(".valorAcordo").toArray().map(function (valorAcordo) {
                return $(valorAcordo).text()
            });
            let pagar = $(".check:checked").parent().parent().find(".pagar").closest(".pagar").toArray().map(function (pagar) {
                return $(pagar).text()
            });
            let pendente = $(".check:checked").parent().parent().find(".pendente").closest(".pendente").toArray().map(function (pendente) {
                return $(pendente).text()
            });
            console.log(numAcordo);
            console.log(valorAcordo);
            console.log(pagar);
            console.log(pendente);


            $.ajax({
                url: "config/quitarAcordo.php",
                method: 'get',
                data: 'numAcordo=' + numAcordo + '&valorAcordo=' + valorAcordo + '&pagar=' + pagar + '&pendente=' + pendente,
                success: function (q) {
                    window.location.href = "Financeiro.php"
                }
            })
        }
    }
});



   
// });
// funcao maximizar/minimizar do gerenciar valor
$("#minimizarCardGerenciarValor").on("click", () => {

    const minCadFunc = $(".cadFunc");
    const maximizar = $("#maximizarCardGerenciarValor");
    const minimizar = $("#minimizarCardGerenciarValor");

    minCadFunc.toggleClass("none");
    maximizar.removeClass("none");
    minimizar.addClass("none");
    console.log(minCadFunc);
});

$("#maximizarCardGerenciarValor").on("click", () => {
    const minCadFunc = $(".cadFunc");
    const maximizar = $("#maximizarCardGerenciarValor");
    const minimizar = $("#minimizarCardGerenciarValor");

    minCadFunc.toggleClass("none");
    maximizar.addClass("none");
    minimizar.removeClass("none");


    console.log(minCadFunc);

});
// funcao maximizar/minimizar quitar acordo
$("#minimizarCardAcordo").on("click", () => {
    const cardQuitarAcordo = $(".cardQuitarAcordo");
    const maximizar = $("#maximizarCardAcordo");
    const minimizar = $("#minimizarCardAcordo");
    cardQuitarAcordo.toggleClass("none");
    maximizar.removeClass("none");
    minimizar.addClass("none");

});
$("#maximizarCardAcordo").on("click", () => {
    const cardQuitarAcordo = $(".cardQuitarAcordo");
    const maximizar = $("#maximizarCardAcordo");
    const minimizar = $("#minimizarCardAcordo");

    cardQuitarAcordo.toggleClass("none");
    maximizar.addClass("none");
    minimizar.removeClass("none");

});
// funcao pesquisar gerenciar valor
$('#pesquisarGerenciarValor').on("click", function (a) {
    a.preventDefault();
    let fornecedorPesquisa = $("#fornecedorPesquisa").val();
    let tipoPesquisa = $("#tipoPesquisa").val();

    console.log(fornecedorPesquisa);
    console.log(tipoPesquisa);

    if (fornecedorPesquisa == '' || tipoPesquisa == '') {
        const toast = document.querySelector(".toast_2"),

            progress_2 = document.querySelector(".progress_2");




        toast.classList.remove("ocultar");

        // progress_2.classList.remove("ocultar");

        $(".toast_2").removeClass("ocultar");

        timer1 = setTimeout(() => {

            toast.classList.add("ocultar");

            $(".toast_2").addClass("ocultar");

        }, 2000);
    }
    else {
        $.ajax({
            url: "filtros/filtro_acordoFinanceiro.php",
            method: 'get',
            data: 'fornecedorPesquisa=' + fornecedorPesquisa + '&tipoPesquisa=' + tipoPesquisa,
            success: function (promocao) {
                $("#tabelaGerenciar").empty().html(promocao);
            }
        })
    }
});
$('#pesquisarGerenciarAcordo').on("click", function (a) {
    let dataInicial = $("#dataInicial").val();
    let dataFinal = $("#dataFinal").val();
    console.log(dataInicial);
    console.log(dataFinal);
    if (dataInicial == '' || dataFinal == '') {
        const toast = document.querySelector(".toast_2"),

            progress_2 = document.querySelector(".progress_2");




        toast.classList.remove("ocultar");

        // progress_2.classList.remove("ocultar");

        $(".toast_2").removeClass("ocultar");

        timer1 = setTimeout(() => {

            toast.classList.add("ocultar");

            $(".toast_2").addClass("ocultar");

        }, 2000);
    }
    else {
        $.ajax({
            url: "filtros/filtro_quitarAcordo.php",
            method: 'get',
            data: 'dataInicial=' + dataInicial + '&dataFinal=' + dataFinal,
            success: function (promocao) {
                $("#tabelaAcordo").empty().html(promocao);
            }
        })
    }
});




