import { criandoHtmlmensagemCarregamento, Toasty } from "../../base/jsGeral.js";

const buttonPesquisarAcordos = document.getElementById(
  "pesquisarFiltroFornecedores"
);
//const IconeAbrirdetalhamentoAcordos = document.getElementById("Abrir");

const buscarAcordosFiltrados = (
  dataInicial,
  dataFinal,
  status,
  tipoContrato
) => {
  criandoHtmlmensagemCarregamento("exibir");
  $.ajax({
    url: "filtros/filtro_fornecedores.php",
    method: "get",
    data:
      "dataInicialPesquisa=" +
      dataInicial +
      "&dataFinalPesquisa=" +
      dataFinal +
      "&status=" +
      status +
      "&tipoContrato=" +
      tipoContrato,
    success: function (promocao) {
      $("#tabelaAcompanhamentosAcordos").empty().html(promocao);
      criandoHtmlmensagemCarregamento("ocultar");
    },
  });
};

const AceitarAcordos = (dataInicial, dataFinal, fornecedor, tipoacordo) => {
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

buttonPesquisarAcordos.addEventListener("click", () => {
  console.log("sdsd");

  const dataInicial = document.getElementById("dataInicialPesquisa").value;
  const dataFinal = document.getElementById("dataFinalPesquisa").value;
  const status = document.getElementById("status").value;
  const tipoContrato = document.getElementById("tipoContrato").value;

  if (
    dataFinal == "" ||
    dataFinal == "" ||
    status == "" ||
    tipoContrato == ""
  ) {
    Toasty("Atenção", "Preencha todos os campos", "#E20914");
  } else {
    buscarAcordosFiltrados(dataInicial, dataFinal, status, tipoContrato);
  }
});

const IconeAbrirdetalhamentoAcordos = $(".Abrir").on("click", function (a) {
  // criandoHtmlmensagemCarregamento("exibir");
  var check = $(this).parent().find(".check").closest(".check").val();
  var SEQFORNECEDOR = $(this)
    .parent()
    .find(".SEQFORNECEDOR")
    .closest(".SEQFORNECEDOR")
    .text();

  window.location.href =
    "AbrirAcordo.php?codAcordo=" + check + "&seqFornecedor=" + SEQFORNECEDOR;
  console.log(SEQFORNECEDOR);
});

const aceitarAcordo = $(".aceitar").on("click", function (a) {
  let verificarChecked = 0;
  var checkede = $(".check")
    .toArray()
    .map(function (checkede) {
      let checkar = $(checkede).is(":checked");

      if (checkar == true) {
        verificarChecked = 1;
      }
    });
  if (verificarChecked == 0) {
    Toasty("Atenção", "Nenhum Acordo selecionado", "#E20914");
  } else {
    const SEQFORNECEDOR = $(".check:checked")
      .parent()
      .parent()
      .find(".SEQFORNECEDOR")
      .closest(".SEQFORNECEDOR")
      .toArray()
      .map(function (SEQFORNECEDOR) {
        return $(SEQFORNECEDOR).text();
      });

    const dataini = document.getElementById("dataini").value;
    const datafim = document.getElementById("datafim").value;

    const check = $(".check:checked")
      .parent()
      .find(".check")
      .closest(".check")
      .toArray()
      .map(function (check) {
        return $(check).val();
      });
    AceitarAcordos(dataini, datafim, SEQFORNECEDOR, check);

    console.log(SEQFORNECEDOR, check);
  }
});

$(".atrrcheckGerenciar").on("click", function (e) {
  if ($(".check").is(":checked")) {
    $(".check").prop("checked", false);
  } else {
    $(".check").prop("checked", true);
  }
});
$(".delete").on("click", function () {
  let id = $(this).parent().parent().find(".id").text();
  $.ajax({
    url: "Modal/modalFornecedor.php",
    method: "get",
    data: "id=" + id,
    success: function (modal) {
      $("#modalBody").empty().html(modal);
      $("#centralModalDanger").modal();
    },
  });
});
