<?php
require_once '../core/Database.php';

$conn = Database::conectar();

if ($conn) {
    echo "Conectado com sucesso!";
} else {
    echo "Erro na conexão!";
}
