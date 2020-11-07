<!DOCTYPE html>
<html lang="pt-BR">
<?php
    
    include_once "./cabecalho.php";
    include_once "./menu.php";
?>

    <h2 class="px-3">Contato</h2>
    <hr>

    <div class="contatos container-fluid">
        <div class="email">
            <img src="imagens\email.jpg" width="90px">
            contato@amigaopet.com.br
        </div>

        <div class="whatsapp">
            <img src="imagens\whatsapp.jpg" width="80px">
            (11) 9999-9999
        </div>

       
    </div>

    <div class="form-group">
    <form method="post" action="" class="px-5 py-2">
        Nome:<br>
        <input type="text" name="nome" style="width:500px" class="form-control"><br>
        Mensagem:<br>
        <input type="text" name="msg" style="width:500px" class="form-control"><br>
        <input type="submit" name="submit" value="Enviar" class="btn btn-success"><br>
    </div>
    

<?php
    include_once "./rodape.php";
?>