<?php $render('header'); ?>
<div class="main">
    <div class="container-add">
        <h2>Adicionar Novo Usuário</h2>

        <form action="<?=$base;?>/novo" method="post">
            <label for="">
                Nome:<br/>
                <input type="text" name="name" id="">
            </label>

            <label for="">
                E-mail:<br/>
                <input type="email" name="email" id="">
            </label>

            <input type="submit" value="Adicionar" class="btn-form">
        </form>
    </div>
</div>

<?php $render('footer'); ?>