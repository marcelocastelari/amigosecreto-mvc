<?php $render('header'); ?>

<div class="homebtn">
<a class="home" href="<?=$base;?>/">HOME</a>
</div>

<h2>Cadastrar Nova Pessoa</h2>

<html>
    <body class="pgcadastro">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
            
                function verifica() {
                    if (document.forms[0].email.value.length == 0) {
                        alert('Por favor, informe o seu EMAIL.');
                        document.frmEmail.email.focus();
                        return false;
                }
                return true;
                }

                function checarEmail(){
                    if( document.forms[0].email.value=="" 
                    || document.forms[0].email.value.indexOf('@')==-1 
                        || document.forms[0].email.value.indexOf('.')==-1 )
                        {
                        alert( "Por favor, informe um E-MAIL válido!" );
                        return false;
                    }
                }

                $(document).ready(function(){
            $('#email').on('input', function(){
                $('#add').prop('disabled', $(this).val().length < 5);
            });
            });
            </script>

        <form class="formcad" method="POST" action="<?=$base;?>/cadastro" onSubmit="return ( verifica() )" name="frmEnvia">
            <label class="nome"> 
                Nome:<br/>
                <input id="nome" type="text" name="name" required placeholder="Digite o nome"/>
            </label><br/><br/>
            <label class="email"> 
                E-mail:<br/>
                <input id="email" type="email" name="email" required placeholder="Digite o E-mail" onblur="checarEmail();"/>
            </label><br/><br/>

            <input class="add" id="add" type="submit" value="Adicionar" disabled>
        </form>


    </body>

</html>

<?php $render('footer'); ?>