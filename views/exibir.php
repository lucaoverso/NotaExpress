<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Exibir Conteúdo</title>
</head>
<body>
  <h2>Conteúdo encontrado</h2>
  <p><strong>Código:</strong> <?= $nota['codigo'] ?></p>

  <?php if ($nota['tipo'] === 'nota'): ?>
    <div style="white-space: pre-wrap; border: 1px solid #ccc; padding: 10px;">
      <?= htmlspecialchars($nota['conteudo']) ?>
    </div>
  <?php elseif ($nota['tipo'] === 'arquivo'): ?>
    <p>Arquivo disponível para download:</p>
    <a href="/notaexpress/public/uploads/<?= $nota['conteudo'] ?>" download>Clique aqui para baixar</a>
  <?php endif; ?>
</body>
</html>
