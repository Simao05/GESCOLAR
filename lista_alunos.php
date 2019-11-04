<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
try
{
    include 'includes/conexao.php';

    $sql = "SELECT id_aluno, nome, cpf,
                   DATE_FORMAT('%d/%m/%Y', data_nascimento) AS data_nasc
            FROM alunos
            ORDER BY nome ASC ";

    $stml = $conexao->prepare($sql);
    $stml->execute();

} catch(EXception $e) {
        echo $e >getMessage(); 
}
?>
<table>
   <thead>
       <tr>
          <th>ID</th>   <th>Nome</th>   <th>CPF</th>   <th>DATA NASCIMENTO</th> 
       </tr>
   </thead>
   <tbody>
   <link href="css/estilos.css" type="text/css" rel="stylesheet" />
   <?php while($alunos = $stmt->fetchObject()): ?>
   <tr>
      <td><?= $alunos->id ?></td> <td><?= $alunos->nome ?></td>
      <td><?= $alunos->cpf ?></td> <td><?= $alunos->data_nasc ?></td>
   </tr>
   <?php endwhile ?>
   </tbody>
</table>
