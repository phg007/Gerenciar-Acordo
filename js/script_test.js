$(".#pesquisarDesligamentos").on('click', function(){
    let dataInicial = $("#dataInicialPesquisa").val();
    let dataFinal = $("#dataFinalPesquisa").val();
    let loja = $("#loja").val();
    console.log(dataInicial);
    console.log(dataFinal);
    console.log(loja);
    if (dataInicial == '' || dataFinal == '' || loja == '') {
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

})