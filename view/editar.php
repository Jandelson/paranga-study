<div class="container">
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados->nome ?? ''; ?>">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $dados->email ?? ''; ?>">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="number" class="form-control" id="telefone" name="telefone" value="<?php echo $dados->telefone ?? ''; ?>">
        </div>
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a type="button" href= "/" class="btn btn-secondary">Voltar</a>
    </form>
</div>