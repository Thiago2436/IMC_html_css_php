<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Indice de massa corporal</title>
</head><body></body>

<?php

        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        $conta1 = $altura*$altura;
        $conta2 = $peso/$conta1;

        $resultado = number_format($conta2);

        if(isset($resultado) && $resultado != '0'){;	
                echo "Seu IMC é: ".$resultado;               
        }else{
                echo '<h1><br><br>Por favor, utilize apenas numeros!</h1>';	
        }    
?>
<br>
<b><a href="indeximc.html"><b> Voltar ! </b></a></b>

</html>
