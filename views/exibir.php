<head>
    <title>Exibir Conteúdo</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <h2>Conteúdo encontrado</h2>
    <p><strong>Código:</strong> <?= $nota['codigo'] ?></p>

    <?php if ($nota['tipo'] === 'nota'): ?>
        <div style="white-space: pre-wrap; border: 1px solid #ccc; padding: 10px;">
            <?php echo $nota['conteudo'] ?>
        </div>
    <?php elseif ($nota['tipo'] === 'arquivo'): ?>
        <p>Arquivo disponível para download:</p>
        <a href="/notaexpress/public/uploads/<?= $nota['conteudo'] ?>" download>Clique aqui para baixar</a>
    <?php endif; ?>
    <?php include 'footer.php'; ?>
</body>

</html>