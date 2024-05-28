<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function nome_funcao($par_1 = 0, $par_2 = "vazio") {
    echo "codigo de função <br>";
    return "Dado de Rertono: ".$par_1."/".$par_2;
}
$retono = nome_funcao();
echo $retorno. "<br><br>";
$retorno = nome_funcao(12, "Bill Gates"); 
echo $retorno."<br><br>;

?>
    
</body>
</html>