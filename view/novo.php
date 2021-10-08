<div class="container">
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="number" class="form-control" id="telefone" name="telefone">
        </div>
        <!-- ENDERECO -->
        <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" 
            placeholder="informar o cep"
            onblur="pesquisacep(this.value);">
        </div>
        <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>
            <div class="form-group col-md-6">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro">
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <input type="text" class="form-control" id="uf" name="uf">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a type="button" href= "/" class="btn btn-secondary">Voltar</a>
    </form>
</div>