

    <div class="container" >
      <div class="col-md-10 col-md-offset-1">  
        <span class=""><!--
          <h2 class="text-center text-uppercase ">comércio exterior</h2>
        </span>
        
	      <hr/>
        <h3 class="text-center">Cabotagem é:</h3>-->
        <br>
        <br>
	      <br>
	      <br>
	      <br>
	      
        <h3 class="text-center text-danger text-uppercase bold">Errado!</h3>
        <p class="text-center text-uppercase" id="margem">Você errou! Clique para voltar e tente novamente ou continue navegando.</p>
  
  <?php $info = parse_url($_SERVER["HTTP_REFERER"]); ?><!--Esta linha pega a ultima pagina acessada-->
  <?php $result = substr($info['path'], -2);    // retorna os dois ultilmos numeros que no caso seria a categoria?>
  
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <a href="<?php echo $info['path'];?>" <button class="btn3d btn btn-danger btn-lg pull-left col-md-4"><span class="glyphicon glyphicon-chevron-left"></span> tentar novamente</button></a>
            <a href="escolha-pergunta/<?php echo $result;?>"<button class="btn3d btn btn-success btn-lg pull-right col-md-4">escolha outra questão <span class="glyphicon glyphicon-chevron-right"></span></button></a>
          </div>
        </div>
         
      </div><!--/.cols -->
    </div><!--/.container -->
