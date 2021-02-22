<?php $render('header'); ?>

<a href="<?=$base;?>/novo" id="newuser">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÔES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <div class="container-tbl">
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <div class="btn-edit">
                        Editar
                    </div>
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <div class="btn-del">
                        Excluir
                    </div>
                </a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>