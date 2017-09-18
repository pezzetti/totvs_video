<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="row">
		<h4>Guias para campos do formulário</h3>
		<hr/>
		<div class="col-md-1">
			<a class ="btn btn-primary" href="<?=base_url();?>index.php/guide/newGuide">Novo Guia</a>
		</div>	

		<div class="col-md-12">
			<?php  if($this->session->flashdata('message')) :?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?= $this->session->flashdata('message');unset($_SESSION['message']);?>
			</div>
			    
			<?php endif;?>
			<table class="table table-striped">
			<thead>
				<tr>
					<td><strong>Campo Formulário</strong></td>	
					<td><strong>Link</strong></td>	
					<td><strong>Ações</strong></td>	
				</tr>		
			</thead>
			<tbody>
				<?php foreach($guides as $guide) :?>
					<tr>
					<td><?=$guide->campo_formulario;?></td>	
					<td><a href="<?=$guide->link;?>" target="_blank"><?=$guide->link;?></a></td>	
					<td> <a href="<?=base_url().'index.php/guide/delete/'.$guide->video_id;?>" onclick="return confirm('Deseja deletar?');" title="Excluir"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>	
				</tr>	
				<?php endforeach;?>
			</tbody>
		</table>
	</div>	
	</div>	
</div>
