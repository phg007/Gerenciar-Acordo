<?php
class Acordo
{


    public function buscarAcordoPorTipo($oracle)
    {
        $lista = array();
        $query = "select a.seqfornecedor,
        b.nomerazao,
        a.codtipoacordo,
        c.descricao,
        sum(a.vlracordo) as vlrtotal
        from msu_acordopromoc a, ge_pessoa b, mac_tipoacordo c
        where a.dtaemissao between '01nov2022' and '10may23'
        and a.situacaoacordo = 'F'
        and c.codtipoacordo = a.codtipoacordo
        and b.seqpessoa = a.seqfornecedor
        group by a.seqfornecedor, b.nomerazao, a.codtipoacordo, c.descricao
        order by b.nomerazao";

        //echo  $query;

        $resultado = oci_parse($oracle, $query);
        oci_execute($resultado);

        while ($row = oci_fetch_assoc($resultado)) {
            array_push($lista, $row);
        }
        return $lista;
    }
    public function tipoDeContrato($oracle)
    {
        $lista = array();
        $query = "select * from mac_tipoacordo";

        //echo  $query;

        $resultado = oci_parse($oracle, $query);
        oci_execute($resultado);

        while ($row = oci_fetch_assoc($resultado)) {
            array_push($lista, $row);
        }
        return $lista;
    }

    public function buscarAcordoPorCodFornecedor($oracle, $codAcordo, $fornecedor)
    {
        $lista = array();
        $query = "select a.nroacordo,
        a.vlracordo,
        b.vlrpago as vlrquitado,
        b.vlroriginal - b.vlrpago as vlraberto
        from msu_acordopromoc a, fi_titulo b
        where b.nrodocumento = a.nroacordo
        and a.nroempresa = b.nroempresa
        and a.seqfornecedor = b.seqpessoa
        and a.codtipoacordo = $codAcordo
        and a.seqfornecedor = $fornecedor
        and a.dtaemissao between '01nov2022' and '10may23'
        and a.situacaoacordo not in('C')";

        //echo  $query;

        $resultado = oci_parse($oracle, $query);
        oci_execute($resultado);

        while ($row = oci_fetch_assoc($resultado)) {
            array_push($lista, $row);
        }
        return $lista;
    }
}


class Data
{

    public function dataIniciomes()
    {
        $primeiroDiaMes = date('Y-m-01');
        return $primeiroDiaMes;
    }
    public function dataFimMes()
    {
        $ultimoDiaMes = date('Y-m-t');
        return $ultimoDiaMes;
    }
}
