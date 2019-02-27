<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 1</title>
    </head>
    <body>
        <?php
           
        function primo($numero){
           if ($numero%2==0){
               echo "É um número primo";
           }else{
               echo "Não é um número primo";
           } 
          
        }
        echo primo(2);    
        ?>
    </body>
</html>
