    <div class="container" >
      <div class="col-md-10 col-md-offset-1">  
        <div class="row">
          <span class="col-md-8 col-md-offset-2">
            <h2 class="text-center"><?php foreach ($cat as $m ) { ?>
            <?=$m->nm_categoria ?></h2>
            <?php } ?>
          </span>
        </div>

	      <hr/>
        <?php foreach ($perg as $m ) { ?>
        <h3 class="text-center"><?= $m->nm_pergunta ?></h3>
        <?php } ?>
        <br>

      
        <ul class="list-group">
          <div class="radio">  
          <?php  srand((float)microtime()*1000000); ?>
          <?php shuffle($alt); ?>
          <?php foreach ($alt as $m ) { ?>
            <li class="list-group-item">
              <label><input type="radio" name="optradio">
                <a href="<?php echo base_url();?>verifica-escolha/<?php echo $m['tipo'];?>"><?= $m['ds_alternativa'] ?></a>
              </label>
            </li>
          <?php } ?>
          </div>
        </ul><!--/.list-group -->
  
        

      </div><!--/.cols -->
    </div><!--/.container -->

    