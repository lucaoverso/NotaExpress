<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../models/Nota.php';

Nota::salvar('ABC123', 'nota', 'Essa é uma anotação de teste.');

$dados = Nota::buscarPorCodigo('ABC123');
print_r($dados);
