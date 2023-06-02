<?php
class Acordo
{

    public function buscarAcordoPorTipo($oracle)
    {
        $lista = array();
        $query = "select a.seqfornecedor,
        b.nomerazao,
        --a.nroempresa,
        a.codtipoacordo,
        c.descricao,
        sum(a.vlracordo) as vlrtotal,
        sum(d.vlroriginal) as valor,
        sum(d.vlrpago) as vlrpago,
        sum(d.vlroriginal) - sum(d.vlrpago) as vlraberto
        from msu_acordopromoc a, ge_pessoa b, mac_tipoacordo c, fi_titulo d
        where a.dtaemissao between '01jun23' and '30jun23'
        and a.situacaoacordo = 'F'
        --and a.nroempresa = 201
        -- and a.seqfornecedor = 181356
        and c.codtipoacordo = a.codtipoacordo
        and d.nrodocumento = a.nroacordo
        and a.seqfornecedor = d.seqpessoa
        and a.nroempresa = d.nroempresa
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
        $query =
            "select distinct case
            when a.codtipoacordo = 1 then
         'SELLIN'
         ELSE
         'SELLOUT'
            END AS TIPO
            from mac_tipoacordo a
        ";

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
        a.seqfornecedor,
        b.vlrpago as vlrquitado,
        b.nroempresa,
        b.vlroriginal - b.vlrpago as vlraberto
        from msu_acordopromoc a, fi_titulo b
        where b.nrodocumento = a.nroacordo
        and a.nroempresa = b.nroempresa
        and a.seqfornecedor = b.seqpessoa
        and a.codtipoacordo = $codAcordo
        and a.seqfornecedor = $fornecedor
        and a.dtaemissao between '01jun23' and '30jun23'
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

class Comercial
{


    public function buscarComprador($oracle)
    {
        $lista = array();
        $query = "select SEQCOMPRADOR, APELIDO
        FROM consinco.MAX_COMPRADOR A
        WHERE A.STATUS = 'A'
        AND A.SEQCOMPRADOR NOT IN (49, 45, 44, 43, 13, 41, 57, 56, 58, 19)
        ORDER BY A.APELIDO";

        //echo  $query;

        $resultado = oci_parse($oracle, $query);
        oci_execute($resultado);

        while ($row = oci_fetch_assoc($resultado)) {
            array_push($lista, $row);
        }
        return $lista;
    }

    public function buscarFornecedor($oracle, $comprador)
    {
        $lista = array();
        $query = "select distinct a.seqfornecedor, b.nomerazao, c.comprador
        from msu_acordopromoc a, ge_pessoa b, max_comprador c
      where b.seqpessoa = a.seqfornecedor
         and a.seqcomprador = c.seqcomprador
         and a.seqcomprador = $comprador
      order by 2, 3";



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


class Insert
{
    public function insertAceitarTipoAcordo($oracle, $dataini, $datafim, $fornecedor, $tipoacordo)
    {

        $query = "begin 

        for t in (
        select a.nroempresa,
               a.codtipoacordo,
               a.nroacordo,
               a.seqfornecedor,
               a.seqcomprador,
               a.vlracordo  as valor
          from msu_acordopromoc a
        where a.situacaoacordo not in ('C')
           and to_char(a.dtaemissao,'YYYY-MM-DD') between '$dataini' and '$datafim'
           and a.seqfornecedor = $fornecedor  
           and a.codtipoacordo = $tipoacordo 
           ) 
        
           loop
        INSERT INTO WEB_INSERE_ACORDOS( SEQLANCTO,
                                  NROACORDO,
                                  NROEMPRESA,
                                  SEQFORNECEDOR,
                                  VALORACEITO,
                                -- STATUS,
                                  SITUACAO )VALUES ( S_SEQLANCTO_ACORDO.NEXTVAL, t.nroacordo,t.nroempresa,t.seqfornecedor,t.valor,'ACEITO' );
        
        end loop;
        end;";

        echo "<br>" . $query . "<br>";

        $parse = oci_parse($oracle, $query);
        $retorno = oci_execute($parse);
        if ($retorno) {
            echo   1;
            return true;
        } else {
            echo   0;
            return  false;
        }
    }

    public function insertAceitarAcordodetalhado($oracle, $NROACORDO, $NROEMPRESA, $fornecedor, $VALOR)
    {

        $query = "INSERT INTO WEB_INSERE_ACORDOS( SEQLANCTO,
        NROACORDO,
        NROEMPRESA,
        SEQFORNECEDOR,
        VALORACEITO,
        STATUS,
        SITUACAO )VALUES ( S_SEQLANCTO_ACORDO.NEXTVAL,  $NROACORDO, $NROEMPRESA, $fornecedor, $VALOR, 'ACEITO PARCIAL','ACEITO')";

      

        $parse = oci_parse($oracle, $query);
        $retorno = oci_execute($parse);
        if ($retorno) {
            echo   1;
            return true;
        } else {
            echo   0;
            return  false;
        }
    }
}
