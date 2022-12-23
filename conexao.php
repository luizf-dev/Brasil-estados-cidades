<?php

/*
! conexao com o banco de dados */
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_cidades_uf';

$mysql = new mysqli($hostname, $username, $password, $database);
$conexao = $mysql;