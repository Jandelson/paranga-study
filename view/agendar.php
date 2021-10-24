<div class="container">
    <form>
        <div class="form-group">
            <div class="row">
                <label>Evento</label>
                <div class="col-sm">
                    <input type="text" class="form-control" id="evento" name="evento" value="<?php echo $dados->evento ?? ''; ?>">
                </div>
                <div class="col-sm">
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="col-sm">
                    <input type="input" size="4" placeholder = '00:00' maxlength="5" class="form-control" id="hora" name="hora">
                </div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Evento</th>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
            <th scope="row">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($dados as $dado) {
                echo '
                <tr>
                <td scope="col">' . $dado['evento'] . '</td>
                <td scope="col">' . $dado['data'] . '</th>
                <td scope="col">' . $dado['hora'] . '</th>
                <td scope="row">
                    <a type="button" href="/editar/' . $dado['id_contato'] . '" class="btn btn-secondary">Editar</a>
                    <a type="button" href="/excluir/' . $dado['id_contato'] . '" class="btn btn-danger">Excluir</a>
                </th>
                </tr>';
                }
            ?>
        </tbody>
    </table>
</div>