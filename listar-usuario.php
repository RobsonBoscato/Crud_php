<h2>Usuários listados:</h2>

<?php

  $sql = ("SELECT * FROM usuarios");
  $usuarios = $conexao->query($sql);
  $qtd = $usuarios->num_rows; // retorno de linhas da table;

  if (!$qtd == 0) {    
    print "<table class='table table-hover table-striped table-bordered'>";
      print "<tr>";
      print "<th>#</th>";
      print "<th>Nome</th>";
      print "<th>E-mail</th>";
      print "<th>Data de Nascimento</th>";
      print "<th>Ações</th>";
      print "</tr>";
    foreach ($usuarios as $key => $value) {
        print "<tr>";
        print "<td>" . $value['id'] . "</td>";
        print "<td>" . $value['nome'] . "</td>";
        print "<td>" . $value['email'] . "</td>";
        print "<td>" . $value['data_nasc'] . "</td>";
        print "<td>
              <button onclick=\"location.href='?page=editar&id=".$value['id']."';\" class='btn btn-success'>Editar</button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$value['id']."';
              }else{false;}\" class='btn btn-danger'>Excluir</button>
              </td>";
        print "</tr>";
        }
      print "<table>";
    }else {
    print "<p class='alert alert-danger'>Não encontrou resultados! </p>";
  }


?>