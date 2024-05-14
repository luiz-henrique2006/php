<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1> Arrays - laços</h1>

<h2> Array: Definição Explicita (sem chave) </h2>

<pre>
    <?php
    $var = array(1234);

    echo "impressao 1 por 1";
    echo $var[1];
    echo $var[2];
    echo $var[3];
    echo $var[4];
    ?>
</pre>

<h2> Impressão com foreach:</h2>

<pre>
    <?php

for ($a=0; $a<count ($var1); $a++){
    echo "<br>$var1[$a]";
}

?>

</pre>

<h2> Impressão com foreach:</h2>

<pre>
    <?php

    $var1 =array("valdete viana", "erika", "jose", "luiz");

    foreach(var1 as $dados){
        echo $dados;
        echo "<br>";
    }

    ?>
</pre>

<?php
echo
$alunos= array("Maria" =>
                     array( "endereço"  => "Rua berebel do butel 375"
                           "bairro"   =>  "jubeleu"),

            "joao" =>
                           array( "endereço"  => "Rua pernabel dl 090"
                                 "bairro"   =>  "bucetil"),
                                 
            "Zeca" =>
                     array( "endereço"  => "Rua caverna de nadson 665"
                           "bairro"   =>  "jujuba")
                           
      
                     
)



    
</body>
</html>