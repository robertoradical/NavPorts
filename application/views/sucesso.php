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
        <?php $info = parse_url($_SERVER["HTTP_REFERER"]); ?><!--Esta linha pega a ultima pagina acessada-->
        <?php $result = substr($info['path'], -2);    // retorna os dois ultilmos numeros que no caso seria a categoria?>
        <h3 class="text-center text-success text-uppercase bold">Parabéns!</h3>
        <p class="text-center text-uppercase" id="margem">Você acertou! Clique para continuar navegando.</p>
        
        <div class="row col-md-offset-5">
          <a href="escolha-pergunta/<?php echo $result;?>"<button class="btn3d btn btn-success btn-lg">continue <span class="glyphicon glyphicon-chevron-right"></span></button></a>
        </div>
        

      </div><!--/.cols -->
    </div><!--/.container -->

    