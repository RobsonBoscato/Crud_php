<?php
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = md5($_POST["senha"]);
      $data_nasc = $_POST["data_nasc"];

      $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')"; 

      $res = $conexao->query($sql);

      if ($res) {
        print "<script>alert('Cadastrado com sucesso.');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Erro! Não foi possível incluir o usuário.');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
      break;
    case 'alterar':
      # code...
      break;
    case 'excluir':
      # code...
      break; 
  }