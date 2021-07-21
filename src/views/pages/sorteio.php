<?php $render('header'); ?>

<div class="homebtn">
<a class="home" href="<?=$base;?>/">HOME</a>
</div>

<h2>A dupla sorteada foi:</h2>

<table class="tablesorteio" width="200px">
    <?php 
        foreach ($usuario as $usuarios): ?>
            <tr>
            <th>Nome</th>
            <td><?=$usuarios['nome'];?></td>
            </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>