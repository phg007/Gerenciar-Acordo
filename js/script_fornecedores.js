import { criandoHtmlmensagemCarregamento, Toasty } from "../../base/jsGeral.js";

const buttonPesquisarAcordos = document.getElementById(
  "pesquisarFiltroFornecedores"
);
const IconeAbrirdetalhamentoAcordos = document.getElementById("Abrir");

class CapturarElementosDOM {
  //  constructor() ;

  elementos() {}
}

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

IconeAbrirdetalhamentoAcordos.addEventListener("click", function (d) {
  var produtopromoc = $(this)
    .parent()
    .parent()
    .parent()
    .find(".Tipo")
    .closest(".Tipo")
    .text();
  console.log(produtopromoc);

  // criandoHtmlmensagemCarregamento("exibir");

  //window.location.href = "AbrirAcordo.php";
});

$("#aceitarAcompanhamentoAcordo").on("click", function (a) {
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
    const toast = document.querySelector(".toast_2"),
      progress_2 = document.querySelector(".progress_2");

    toast.classList.remove("ocultar");

    progress_2.classList.remove("ocultar");

    $(".toast_2").removeClass("ocultar");

    timer1 = setTimeout(() => {
      toast.classList.add("ocultar");

      $(".toast_2").addClass("ocultar");
    }, 2000);
  } else {
    let Tipo = $(".check:checked")
      .parent()
      .parent()
      .find(".Tipo")
      .closest(".Tipo")
      .toArray()
      .map(function (Tipo) {
        return $(Tipo).text();
      });
    let valor = $(".check:checked")
      .parent()
      .parent()
      .find(".valor")
      .closest(".valor")
      .toArray()
      .map(function (valor) {
        return $(valor).text();
      });
    let aberto = $(".check:checked")
      .parent()
      .parent()
      .find(".Aberto")
      .closest(".Aberto")
      .toArray()
      .map(function (Aberto) {
        return $(Aberto).text();
      });
    let Quitado = $(".check:checked")
      .parent()
      .parent()
      .find(".Quitado")
      .closest(".Quitado")
      .toArray()
      .map(function (Quitado) {
        return $(Quitado).text();
      });
    let Status = $(".check:checked")
      .parent()
      .parent()
      .find(".Status")
      .closest(".Status")
      .toArray()
      .map(function (Status) {
        return $(Status).text();
      });
    console.log(Tipo);
    console.log(valor);
    console.log(aberto);
    console.log(Quitado);
    console.log(Status);
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
