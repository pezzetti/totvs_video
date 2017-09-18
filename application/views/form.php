<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">

    <div class="row linha-form">
        <form action="" class="form-horizontal" method="post">
            <fieldset>
                <legend><i class="fa fa-android" aria-hidden="true"></i> Configurações de aplicativo</legend>    <div class="row">
                        <div class="col-md-3">
                            <label class="control-label" for="interface_usuario">Interface de Usuário</label>
                            <?php if(isset($interface_usuario)):?>
                            <a href="#modalVideo" class="youtube-link" data-toggle="modal" data-video="<?=$interface_usuario;?>">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <?php endif;?>
                            <select class="form-control" name="interface_usuario">
                                <option>Quick Service</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label" for="itens_numero_serie">Itens com número de série</label>
                                <?php if(isset($itens_numero_serie)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$itens_numero_serie;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="itens_numero_serie">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="montante_assinatura">Montante para imprimir assinatura</label>
                                <?php if(isset($montante_assinatura)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$montante_assinatura;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <input type="text" class="form-control" name="montante_assinatura" placeholder="Montante para imprimir assinatura"/>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-4">
                                <label class="control-label" for="numero_maximo_pedidos_espera">Número máximo de pedidos em espera</label>
                                 <?php if(isset($numero_maximo_pedidos_espera)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$numero_maximo_pedidos_espera;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <input type="text" class="form-control" name="numero_maximo_pedidos_espera" placeholder="1"/>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="gaveta_dinheiro_sempre_fechada">Gaveta de dinheiro sempre fechada?</label>
                                <?php if(isset($gaveta_dinheiro_sempre_fechada)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$gaveta_dinheiro_sempre_fechada;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="gaveta_dinheiro_sempre_fechada">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="politica_reembolso">Política de reembolso</label>
                                <?php if(isset($politica_reembolso)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$politica_reembolso;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="politica_reembolso">
                                    <option>Reembolso Total</option>
                                    <option>Reembolso Parcial</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="credito_loja_valido_para">Crédito da loja válido para</label>
                                <?php if(isset($credito_loja_valido_para)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$credito_loja_valido_para;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <input type="text" class="form-control" name="credito_loja_valido_para" placeholder="1" disabled/>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="mensagem_rodape_recibo_1">Mensagem de rodapé do recibo 1</label>
                                <?php if(isset($mensagem_rodape_recibo_1)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$mensagem_rodape_recibo_1;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <textarea class="form-control" maxlength="40" rows="2" name="mensagem_rodape_recibo_1" placeholder="Isso irá aparecer no recibo de venda (40 caracteres)"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="mensagem_rodape_recibo_2">Mensagem de rodapé do recibo 2</label>
                                <?php if(isset($mensagem_rodape_recibo_2)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$mensagem_rodape_recibo_2;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <textarea class="form-control" maxlength="500" rows="2" name="mensagem_rodape_recibo_2" placeholder="Isso irá aparecer no recibo de venda (500 caracteres)"></textarea>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="registro_ponto_obrigatorio">Registro de ponto obrigatório</label>
                                 <?php if(isset($registro_ponto_obrigatorio)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$registro_ponto_obrigatorio;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="registro_ponto_obrigatorio">
                                    <option>desativado</option>
                                    <option>ativado</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="habilitar_estorno_nfe">Habilitar estorno NFe</label>
                                 <?php if(isset($habilitar_estorno_nfe)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$habilitar_estorno_nfe;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="habilitar_estorno_nfe">
                                    <option>desativado</option>
                                    <option>ativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="imprimir_recibo_cozinha_para_pedidos_em_espera">Imprimir recibo de cozinha para pedidos em espera</label>
                                <?php if(isset($imprimir_recibo_cozinha_para_pedidos_em_espera)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$imprimir_recibo_cozinha_para_pedidos_em_espera;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="imprimir_recibo_cozinha_para_pedidos_em_espera">
                                    <option>desativado</option>
                                    <option>ativado</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="imprimir_recido_de_ordem_para_pedidos_em_espera">Imprimir recibo de ordem para pedidos em espera</label>
                                <?php if(isset($imprimir_recido_de_ordem_para_pedidos_em_espera)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$imprimir_recido_de_ordem_para_pedidos_em_espera;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="imprimir_recido_de_ordem_para_pedidos_em_espera">
                                    <option>desativado</option>
                                    <option>ativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="imprimir_recibo_do_pedido_por_padrao">Imprimir recibo do pedido por padrão</label>
                                <?php if(isset($imprimir_recibo_do_pedido_por_padrao)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$imprimir_recibo_do_pedido_por_padrao;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="imprimir_recibo_do_pedido_por_padrao">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="imprimir_recibo_fiscal_por_padrao">Imprimir recibo fiscal por padrão</label>
                                <?php if(isset($imprimir_recibo_fiscal_por_padrao)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$imprimir_recibo_fiscal_por_padrao;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="imprimir_recibo_fiscal_por_padrao">
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label" for="envia_recibo_email_por_padrao">Enviar recibos pelo email por padrão</label>
                                <?php if(isset($envia_recibo_email_por_padrao)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$envia_recibo_email_por_padrao;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="envia_recibo_email_por_padrao">
                                    <option>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="habilita_tela_finalizacao_pedido">Habilita tela de finalização do pedido</label>
                                <?php if(isset($habilita_tela_finalizacao_pedido)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$habilita_tela_finalizacao_pedido;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="habilita_tela_finalizacao_pedido">
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-12">
                                <label class="control-label"><strong>Imprimir E-mail no check-out </strong><input type="checkbox" name="imprime_email_checkout" > </label>
                                <?php if(isset($imprime_email_checkout)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$imprime_email_checkout;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label">Máximo histórico da loja</label>
                                <?php if(isset($maximo_historico_loja)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$maximo_historico_loja;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="maximo_historico_loja">
                                    <option></option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-6">
                                <label class="control-label">Tipo do nome na lista de espera</label>
                                <?php if(isset($tipo_nome_lista_espera)):?>
                                <a href="#modalVideo" class="youtube-link" data-toggle="modal"  data-video="<?=$tipo_nome_lista_espera;?>">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                                <?php endif;?>
                                <select class="form-control" name="tipo_nome_lista_espera">
                                    <option>Customizado</option>
                                    <option>Não Customizado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row linha-form">
                            <div class="col-md-1">
                                <input type="submit" class="btn btn-secondary" value="Salvar"/>
                            </div>
                        </div>                                
         </fieldset>
        </form>
    </div>   

<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>         
          <iframe id= "myframe" width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </div>
</div>
<script type="text/javascript">    
  $(function() {
     var theModal,videoSRC,videoSRCauto;
    $(".youtube-link").click(function (e) {
      

      theModal = $(this).attr("href"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
         $(theModal + ' iframe').attr('src', '');
      });

      e.preventDefault();
  });

   $('.modal-content').resizable({
        alsoResize: ".modal-body",
        minHeight: 300,
        minWidth: 300
    });
    $('.modal-dialog').draggable();  
    $('#modalVideo').on('hidden.bs.modal', function (e) {
      $(theModal + ' iframe').attr('src', '');
    });

}); 

 
</script>