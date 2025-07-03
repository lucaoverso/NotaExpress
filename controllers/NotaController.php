<?php
require_once __DIR__ . '/../models/Nota.php';

class NotaController
{
    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $codigo = strtoupper(substr(uniqid(), -6));
            $expiracao = date('Y-m-d H:i:s', strtotime('+1 day'));

            // Se for arquivo
            if (!empty($_FILES['arquivo']['name'])) {
                $tipo = 'arquivo';
                $nomeOriginal = basename($_FILES['arquivo']['name']);
                $conteudo = $codigo . '-' . $nomeOriginal;
                $destino = $_SERVER['DOCUMENT_ROOT'] . '/notaexpress/public/uploads/' . $conteudo;

                if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino)) {
                    Nota::salvar($codigo, $tipo, $conteudo, $expiracao);
                    $mensagem = "Arquivo enviado com sucesso! Código: <strong>{$codigo}</strong>";
                } else {
                    $mensagem = "❌ Erro ao salvar o arquivo.";
                }

                // Caso contrário, é uma nota de texto
            } else {
                $tipo = 'nota';
                $conteudo = $_POST['conteudo'] ?? '';

                if (trim($conteudo) === '') {
                    $mensagem = "❌ A anotação está vazia.";
                } else {
                    Nota::salvar($codigo, $tipo, $conteudo, $expiracao);
                    $mensagem = "Nota salva com sucesso! Código: <strong>{$codigo}</strong>";
                }
            }

            include __DIR__ . '/../views/resultado.php';
        }
    }

    public function acessar($codigo)
    {
        $nota = Nota::buscarPorCodigo($codigo);

        if ($nota) {
            include __DIR__ . '/../views/exibir.php';
        } else {
            echo "<p>❌ Conteúdo não encontrado para o código informado.</p>";
        }
    }
}
