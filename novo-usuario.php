<h2>Novo Usuário!</h2>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">

  <div class="mb-3">
    <label for="name">Nome</label>
    <input type="text" name="nome" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="email">E-mail</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="data_nasc">Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" required>
  </div>

  <div class="mb-3">
    <input type="submit" value="Enviar" class="btn btn-primary">
  </div>

</form>