<!DOCTYPE html>
<html>
<head>
    <title>Novo Contato</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/botao_acao.js"></script>
</head>
<body>
    <form name="contato" id="contato">
        <label>Nome: </label><br>
        <input type="text" id="cadastro_contato_nome" name="cadastro_contato_nome"><br>

        <label>E-Mail</label><br>
        <input type="text" id="cadastro_contato_email" name="cadastro_contato_email"><br>

        <label>Celular</label><br>
        <input type="number" id="cadastro_contato_celular" name="cadastro_contato_celular"><br>

        <button type="button" name="cadastro_contato_cadastrar" value="inserir">Cadastrar</button>
    </form>
</body>
</html>