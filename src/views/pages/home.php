<?php $render('header'); ?>

<div class="container">
    <div class="cadastrar">
        <a id="cadastrar" href="<?=$base;?>/cadastro" >CADASTRAR</a>
        <a class="sortear" href="<?=$base;?>/sorteio">SORTEAR</a>
    </div>

    <form class="buscar" action="<?=$base;?>/busca" method="GET">
        <input type="search" placeholder="Digite nome ou e-mail" name="busca" />
        <button>Buscar</button>
    </form>

</div>


<table width=100%>
    <tr>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/cadastro/<?=$usuario['id'];?>/editar">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="" />
                </a>
                <a href="<?=$base;?>/cadastro/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table> <br/> <br/>



<?php $render('footer'); ?>