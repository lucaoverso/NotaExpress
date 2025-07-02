<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Nota salva</title>
</head>
<body>
  <h2>Nota criada com sucesso!</h2>
  <p><?= $mensagem ?></p>

  <form action="/notaexpress/public/index.php" method="get">
    <button type="submit">Criar nova nota</button>
  </form>
</body>
</html>
