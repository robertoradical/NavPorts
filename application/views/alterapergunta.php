
<div class="container">
 
 <h3 class="text-center">Alterar Pergunta</h3>
 
		<div class="col-md-12">
  			<table class="table table-striped">
                <thead>
                  <tr>
                    <th class="col-md-3">Perguntas</th>
                    <th class="col-md-1">Categoria</th>
                    <th class="col-md-1">Deletar</th>
                    <th class="col-md-3">Renomear</th>
                  </tr>
                </thead>
                <tbody>
               
        		<?php foreach ($perg as $m ) { ?>
                    <tr>
                        <td class="col-md-3"><?= $m->nm_pergunta ?></td>
                        
                        
                        <td class="col-md-3"><form method='POST' action='<?php echo base_url('index.php/Controleadmin/alterarperg/'.$m->id_pergunta); ?>'>
                          <input type='text' name='perg' class="form-control">
                          <input type="submit" class="btn btn-primary btn-sm pull-right" value="renomear">
                          </form>
                          
                          <br>
                          <br>
                          <br>
                          
                        <?php $id = $m->id_pergunta ?>
                        <?php foreach ($alter as $x ) { ?>
                        
                          <?php if($x->id_pergunta === $id){?>
                          
                            <td class="col-md-1"><?= $x->ds_alternativa ?></td>
                            <td class="col-md-1"><form method='POST' action='<?php echo base_url('index.php/Controleadmin/alterarAlter/'.$x->id_alternativa); ?>'>
                              <input type='text' name='perg' class="form-control">
                              <input type="submit" class="btn btn-primary btn-sm pull-right" value="alterar">
                              </form>
                            </td>
                          <?php } ?>
                          
                        <?php } ?>
                        <td class="col-md-1"><?= $m->nm_categoria ?></td>
                        <td class="col-md-1"><a href='<?php echo  base_url('index.php/Controleadmin/deletarperg/'.$m->id_pergunta); ?>'>excluir</a></td>
                        
                    </tr>
                <?php } ?>
                </tbody>
              </table>
    </div>
        	
</div>
</main>