<h2>Editar Usuário!</h2>
<?php
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $user = $conexao->query($sql);
  $row = $user->fetch_object(); // para já trazer as info da DB abaixo
?>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id;?>">

  <div class="mb-3">
    <label for="name">Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email">E-mail</label>
    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="data_nasc">Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <input type="submit" value="Enviar" class="btn btn-primary">
  </div>

</form>