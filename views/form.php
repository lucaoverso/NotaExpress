<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>NotaExpress - Criar nova nota</title>
</head>

<body>
  <h1>NotaExpress</h1>
  <form action="/notaexpress/public/index.php?rota=salvar" method="post" enctype="multipart/form-data">
    <label for="conteudo">Escreva sua anotação:</label><br>
    <textarea name="conteudo" rows="6" cols="40"></textarea><br><br>

    <label for="arquivo">Ou envie um arquivo:</label><br>
    <input type="file" name="arquivo"><br><br>

    <button type="submit">Salvar</button>
  </form>

</body>

</html>