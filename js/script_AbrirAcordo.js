// import { criandoHtmlmensagemCarregamento, Toasty } from "../../base/jsGeral.js";

$(".voltarFornecedor").on("click", function () {
  window.location.href = "Fornecedores.php";
});

$(".atrrcheckGerenciar").on("click", function () {
  if ($(".check").is(":checked")) {
    $(".check").prop("checked", false);
  } else {
    $(".check").prop("checked", true);
  }
});

const AceitarAcordosDetalhado = (
  dataInicial,
  dataFinal,
  fornecedor,
  tipoacordo
) => {
  criandoHtmlmensagemCarregamento("exibir");
  $.ajax({
    url: "config/aceitarAcordo.php",
    method: "get",
    data:
      "dataInicio=" +
      dataInicial +
      "&dataFim=" +
      dataFinal +
      "&fornecedor=" +
      fornecedor +
      "&tipoacordo=" +
      tipoacordo,
    success: function (retorno) {
      if (retorno == "1") {
        Toasty("Atenção", "Acordo aceito com sucesso", "#00a550");
      } else {
        Toasty("Atenção", "Erro ao Aceitar o Acordo", "#E20914");
      }
      //$("#tabelaAcompanhamentosAcordos").empty().html(retorno);
      criandoHtmlmensagemCarregamento("ocultar");
    },
  });
};

// const aceitarAcordo = $(".aceitar").on("click", function () {
//   alert("aceitar");
// });

$(".print").on("click", function () {
  window.location.href = "Imprimir.php";
});
$(".recusar").on("click", function () {
  let id = $(this).parent().parent().find(".id").text();
  $.ajax({
    url: "Modal/modalAbrirAcordo.php",
    method: "get",
    data: "id=" + id,
    success: function (modal) {
      $("#modalBody").empty().html(modal);
      $("#centralModalDanger").modal();
    },
  });
});
$(".open").on("click", function () {
  let id = $(this).parent().parent().find(".id").text();
  $.ajax({
    url: "Modal/modalPedidoDetalhado.php",
    method: "get",
    data: "id=" + id,
    success: function (modal) {
      $("#modalBody").empty().html(modal);
      $("#centralModalDanger").modal();
    },
  });
});

var tabela = document.getElementsByTagName("table");
//var linhas = tabela.getElementsByClassName("tr");
var linhas = $(".tr");

for (var i = 0; i < linhas.length; i++) {
  var linha = linhas[i];
  linha.addEventListener("click", function () {
    //Adicionar ao atual
    // selLinha(this, false); //Selecione apenas um
    selLinha(this, false); //Selecione quantos quiser
  });
}

function selLinha(linha, multiplos) {
  if (!multiplos) {
    var linhas = linha.parentElement.getElementsByTagName("tr");
    for (var i = 0; i < linhas.length; i++) {
      var linha_ = linhas[i];
      linha_.classList.remove("selecionado");
    }
  }
  linha.classList.toggle("selecionado");
}
