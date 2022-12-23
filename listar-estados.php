<?php 

include 'conexao.php';

$sql = $conexao->query("SELECT * FROM tb_estados");
while($resultado = $sql->fetch_array()){ ?>
    <tr>
        <td data-label="#"><?php echo $resultado['id'] ?></td>
        <td data-label="Estado"><?php echo $resultado['nome'] ?></td>
        <td data-label="UF"><?php echo $resultado['uf'] ?></td>
        <td>
            <a class="btn btn-dark" href="lista-cidades.php?id=<?php echo $resultado['id']?>"><i class="fas fa-eye"></i> Lista de Cidades</a>
        </td>
    </tr>
<?php } ?>