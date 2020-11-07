
<?php
    
    include_once "./cabecalho.php";
    include_once "./menu.php";
?>


    <form method="post" action="" class="px-5 py-2">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="endereco">Endereço</label><br>
        <input type="text" name="endereco" id="endereco"><br>
        <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" id="telefone"><br>
        <label for="nome_produto">Nome do Produto</label><br>
        <input type="text" name="nome_produto" id="nome_produto"><br>
        <label for="vUnit">Valor Unitário</label><br>
        <input type="text" name="vUnit" id="vUnit"><br>
        <label for="qtd">Quantidade</label><br>
        <input type="text" name="qtd" id="qtd"><br>
        <label for="vTot">Valor total</label><br>
        <input type="text" name="vTot" id="vTot"><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

<?php
    include_once "./rodape.php";
?>