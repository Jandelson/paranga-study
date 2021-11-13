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
          <form action="/route/excluir" method="post">
          <input type="hidden" name="id_contato" value=' . $dado['id_contato'] . '>
          <td scope="col">' . $dado['nome'] . '</td>
          <td scope="col">' . $dado['email'] . '</td>
          <td scope="col">' . $dado['telefone'] . '</td>
          <td>
            <a type="button" href="/editar/' . $dado['id_contato'] . '" class="btn btn-secondary">Editar</a>
            <a type="button" href="/agendar/' . $dado['id_contato'] . '" class="btn btn-success">Agendar</a>
            <input class="btn btn-danger" type="submit" value="Excluir">
          </td>
          </form>
          </tr>';
        }
      ?>
  </tbody>
</table>