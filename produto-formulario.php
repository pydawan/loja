<?php include("cabecalho.php")?>
    <h1> Formulario de produto</h1>
    <form action="adiciona-produto.php">
        <table class="table">
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <input type="text" name="nome" class="form-control"><br />  
                </td>
            </tr>
            <tr>
                <td>
                    Preco:
                </td>
                <td>
                    <input type="number" name="preco" class="form-control"><br />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value= "Cadastrar" class="btn btn-primary"> 
                </td>
            </tr>
        </table>
        
    </form>
<?php include("rodape.php")?>