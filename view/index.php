<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="row">Ações</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($dados as $dado) {
          echo '
          <tr>
          <td scope="col">' . $dado['nome'] . '</td>
          <td scope="col">' . $dado['email'] . '</th>
          <td scope="col">' . $dado['telefone'] . '</th>
          <td scope="row">
            <a type="button" href="/editar/' . $dado['id_contato'] . '" class="btn btn-secondary">Editar</a>
            <a type="button" href="/excluir/' . $dado['id_contato'] . '" class="btn btn-danger">Excluir</a>
            <a type="button" href="/agendar/' . $dado['id_contato'] . '" class="btn btn-success">Agendar</a>
          </th>
          </tr>';
        }
      ?>
  </tbody>
</table>