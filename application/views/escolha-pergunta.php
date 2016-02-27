<main class="container" >
        
		<ol class="breadcrumb" style="margin-bottom: 5px;margin-top: 35px;">
          <li><a href="<?php echo base_url(); ?>modo-jogo">Modo de jogo</a></li>
          <li><a href="<?php echo base_url(); ?>categorias">Categorias</a></li>
          <li class="active">Escolha a pergunta</li>
        </ol>
        
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <h2 class="text-center"><?php foreach ($cat as $m ) { ?>
            <?=$m->nm_categoria ?></h2>
            <?php } ?>
          <hr class="col-md-4 col-md-offset-4">
          </div>
        <div class="row">
          <p class="text-uppercase text-muted text-center">Escolha uma pergunta para começar o jogo.</p>
          </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <?php $i = 1;?>
        <?php foreach ($perg as $m ) { ?>
          
          <span class="col-md-2"><a href='<?php echo  base_url('questao/'.$m->id_pergunta.'/'.$m->id_categoria); ?>' class="btn3d btn btn-primary btn-lg center-block"><?php echo $i ?></a> <br></span>
        
           <?php $i++; ?>
        <?php } ?>
        </div>
      </div>
    </div>

        <div class="row col-md-4 col-md-offset-4">
          <a href="<?php echo base_url(); ?>categorias" class="btn3d btn btn-default center-block"><span class="glyphicon glyphicon-chevron-left"></span> voltar às categorias</a>
        </div>
    </main><!--/.container -->