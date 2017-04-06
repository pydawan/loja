<?php include("cabecalho.php")?>
    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $conexao = mysqli_connect('127.0.0.1', 'root', '123456', 'loja');
        
        $query = "insert into produtos(nome, preco) values ('{$nome}', {$preco})";
        if (mysqli_query($conexao, $query)) {
            ?>
                <p class="alert-success">Produto <?= $nome ?> no valor de <?= $preco ?> adicionado com sucesso!</p>
            <?php
        } else { ?>
            <p class="alert-danger">Produto <?= $nome ?> nao adicionado com sucesso!</p>
            <?php
        }
        
        mysqli_close($conexao);
        
    ?>
    
<?php include("rodape.php")?>