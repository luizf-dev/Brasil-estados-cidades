<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = $conexao->query("SELECT * FROM tb_cidades where estado = '$id'");

while($resultado = $sql->fetch_array()){ ?>
    <tr>
        <td data-label="#"><?php echo $resultado['id'] ?></td>
        <td data-label="Cidade"><?php echo $resultado['nome'] ?></td>
        <td data-label="UF"><?php echo $resultado['uf'] ?></td>
    </tr>
<?php }
 ?>