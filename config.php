<?php
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'cadastro');

  $conexao = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if($conexao->errno) {
      die("Falha ao conectar ao Banco de Dados: " . $mysqli->errno);
    }
  

