

<?php
function nome_funcao($par_1 = 0, $par_2 ="vazio") {
    echo "Codigo da Funcao <br>";
    return "Dado de Retorno: " .$par_1."/".$par_2;
}
$retorno = nome_funcao();
echo $retorno;
$retorno = nome_funcao(34,"nnn");
echo $retorno;

function multiplica10($x = 6)
{$y = $x*10;
return $x;}

$ret = multiplica(100);
echo $ret;
echo multiplica(20);;
echo multiplica(80)

function imprime ($x = 100)

for ($a=0; $a< $x; a++);
echo "<scmpt> alert ('digite x')"<scrtpt>
?>
