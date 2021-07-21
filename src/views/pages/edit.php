<?php $render('header'); ?>

<div class="homebtn">
<a class="home" href="<?=$base;?>/">HOME</a>
</div>

<h2>Editar Usuário Cadastrado</h2>

<form class="formedit" method="POST" action="<?=$base;?>/cadastro/<?=$usuario['id'];?>/editar">
    <label> 
        Nome:<br/>
        <input type="text" name="name" value="<?=$usuario['nome'];?>" />
    </label><br/><br/>
    <label> 
        E-mail:<br/>
        <input type="email" name="email" value="<?=$usuario['email'];?>" />
    </label><br/><br/>

    <input class="btnsalvar" type="submit" value="Salvar">
</form>

<?php $render('footer'); ?>