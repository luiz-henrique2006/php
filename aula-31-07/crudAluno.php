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
       </td>
       <td>
        <?php
       $idade= $_POST['idade'];
       echo $idade;
       ?>
       </td>
     </tr>

<?php 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "INSERT INTO aluno(nome, idade) VALUES('$nome', '$idade')";

$sqlcombanco = $conexao->prepare($sql);

if($sqlcombanco-> execute())
{
    echo"<strong>OK!</strong> o aluno $nome foi cadastrado com sucesso";
}
?>
</body>
</html>
