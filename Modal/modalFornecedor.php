<?php

include "../../base/conexao_teste.php";
$ID = $_GET['id'];
$ID = ltrim($ID);
?>

<script type="text/javascript" src="../../BASE/mdb/js/bootstrap.min.js"></script>
<div class="modal fade " id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div style="background-color: #00a550; color:white;" class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Motivo da Recusa</h5>

                <button type="button " style="background-color: #ECECEC; color:red;" class="close" data-dismiss="modal" aria-label="Fechar">

                    X

                </button>

            </div>

            <div class="modal-body">

                <input value="<?= $ID ?>" class="ID ocultar" id="IDMODAL" required>

                <input style="display: none;" value="<?= $setor ?>" class="setor" id="setor" required>

                <div class="form-group">

                    <label for="message-text" class="col-form-label">Selecione o Motivo:</label>

                    <!-- <textarea data-ls-module="charCounter" minlength="1 " maxlength="255" class="form-control mensg_rep" id="message-text"></textarea> -->

                </div>
                <div> <select class="form-control">
                        <option>iu </option>
                        <option> oo</option>
                        <option>oi </option>


                    </select>
                </div>

            </div>

            <div class="modal-footer">

                <!-- <button type="button" class="btn btnn" style=color:red data-dismiss="modal">Fechar</button> -->

                <button type="button" class="btn btnnverde Reprovar" value="Reprovado" style="background-color: #00a550;color: white;font-weight:bold;" data-toggle="modal" data-target="#exampleModal">

                    Salvar 

                </button>

            </div>

        </div>

    </div>

</div>