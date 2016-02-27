$(main);
      function main(){
        $("input").click(function(){  
        
        var x = $(this).val();
          if (x!=1){
        var st = "input[value="+x+"]";
        $('label').children().parent().parent().removeClass("errado");
        $('label').children().parent().parent().removeClass("certo");
        $('label').children().parent().parent().addClass("branco");  
              $('label').children(st).parent().parent().addClass("errado").fadeIn();
          } else{
        if($(this).val()==1){
          $('label').children().parent().parent().removeClass("errado");
        $('label').children().parent().parent().removeClass("certo");
        $('label').children().parent().parent().addClass("branco");
                $('label').children('input[value="1"]').parent().parent().addClass("certo").fadeIn();  
        }     
          }   

        });
      }