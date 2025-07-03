<?php
require_once '../core/Database.php';
class Nota {
    // Método para criar uma nova nota/arquivo no banco, uso o "prepare" para adicionar uma camada de segurança contra SQL Injection.
    public static function salvar($codigo, $tipo, $conteudo, $expiracao = null) {
        $sql = "INSERT INTO notas (codigo, tipo, conteudo, expiracao) VALUES (?, ?, ?, ?)";
        $conn = Database::conectar();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$codigo, $tipo, $conteudo, $expiracao]);
    }

    // Método que visa buscar o arquivo ou anotação que o usuário enviou através do seu código gerado, ele busca no banco de dados usando uma query simples de SELECT
    public static function buscarPorCodigo($codigo) {
        $sql = "SELECT * FROM notas WHERE codigo = ?";
        $conn = Database::conectar();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$codigo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
