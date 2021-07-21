<?php $render('header'); ?>

<div class="homebtn">
<a class="home" href="<?=$base;?>/">HOME</a>
</div>

<table class="tablebusca" width=20%>
<?php 
    foreach ($users as $usuarios): ?>
        <tr>
            <th>Nome</th>
        <td><?=$usuarios['nome'];?></td>
        <th>Email</th>
        <td><?=$usuarios['email'];?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>