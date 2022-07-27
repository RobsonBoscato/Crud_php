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

    case 'editar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = md5($_POST["senha"]);
      $data_nasc = $_POST["data_nasc"];

      $sql = "UPDATE usuarios SET 
                  nome='{$nome}',
                  email='{$email}',
                  senha='{$senha}',
                  data_nasc='{$data_nasc}'
              WHERE 
                  id=".$_REQUEST["id"];  

      $res = $conexao->query($sql);

      if ($res) {
        print "<script>alert('Editado com sucesso.');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Erro! Não foi possível editar o usuário.');</script>";
        print "<script>location.href='?page=listar';</script>";
      }

      break;

    case 'excluir':
      
      $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
      $res = $conexao->query($sql);

      if ($res) {
        print "<script>alert('Excluído com sucesso.');</script>";
        print "<script>location.href='?page=listar';</script>";
      } else {
        print "<script>alert('Erro! Não foi possível excluir o usuário.');</script>";
        print "<script>location.href='?page=listar';</script>";
      }

      break; 
  }