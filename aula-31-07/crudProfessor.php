<?php
require_once("conexao.php");
?>

       <tr>
           <th>Nome do aluno</th>
           <th>Idade</th>
           
         </tr>
   <tr>
       <td>
        <?php
      $nome= $_POST['nome'];
      echo $nome;
       ?>
       <td>
        <?php
      $idprof= $_POST['idprof'];
      echo $idprof;
       ?>
       </td>
       <td>
        <?php
      $endereco= $_POST['endereco'];
      echo $endereco;
       ?>
       <td>
        <?php
       $idade= $_POST['idade'];
       echo $idade;
       ?>
       </td>
     </tr>

<?php 

$nome = $_POST['nome'];
$idprof = $_POST['idprof'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];

$sql = "INSERT INTO professor(nome, idprof, endereco, idade) VALUES('$nome', '$idprof', '$endereco' '$idade')";

$sqlcombanco = $conexao->prepare($sql);

if($sqlcombanco-> execute())
{
    echo"<strong>OK!</strong> o professor $nome foi cadastrado com sucesso";
}
?>
</body>
</html>


