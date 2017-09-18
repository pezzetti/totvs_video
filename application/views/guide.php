<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container">
    <div class="row linha-form">      
    <form class="form-horizontal" action="<?= base_url().'index.php/guide/';?>save" method="post">
        <fieldset>
            <legend> <h4 class="card-header"><i class="fa fa-youtube-play" aria-hidden="true"></i> Cadastro de Videos</h4>
            </legend>
             <?php  if($this->session->flashdata('message')) :?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?= $this->session->flashdata('message'); unset($_SESSION['message']);?>
            </div>            
            <?php endif;?>            

            <div id="form-row"></div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-control-label">Campo</label>
                    <input type="text" class="form-control" name="campo_formulario[]" placeholder="Campo do formulário Ex:itens_numero_serie" required>
                </div>
                <div class="col-md-7">
                    <label class="form-control-label">Link do Youtube</label>
                    <input type="text" class="form-control" name="link[]" placeholder="Url do video" required>
                </div>
                <div class="col-md-1">                    
                    <h1><a href="#" class="add glyphicon glyphicon-plus" id="add" aria-hidden="true"></a></h1>
                </div>
            </div>
            <div class="row linha-form">
                <div class="col-md-2">
                    <a href="<?=base_url();?>index.php/guide">Voltar</a>
                    <input type="submit" class="btn btn-secondary" value="Salvar">
                </div>
            </div>
        
    </div>
    </fieldset>
    </form>
    </div>
</div>

<script type="text/javascript" src="<?=base_url();?>assets/js/guide.js">
</script>
