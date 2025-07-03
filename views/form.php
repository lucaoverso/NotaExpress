<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>NotaExpress - Criar nova nota</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
  <h1>NotaExpress</h1>
  <form action="/notaexpress/public/index.php?rota=salvar" method="post" enctype="multipart/form-data">
    <div id="editor" style="height: 300px;"></div>
    <input type="hidden" name="conteudo" id="inputConteudo">
    <label for="arquivo">Ou envie um arquivo:</label><br>
    <input type="file" name="arquivo"><br><br>
    <button type="submit">Salvar</button>
  </form>

  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script>
    const quill = new Quill('#editor', {
      theme: 'snow',
      placeholder: 'Escreva sua nota aqui...',
      modules: {
        toolbar: [
          ['bold', 'italic', 'underline'],
          [{ header: [1, 2, 3, false] }],
          [{ list: 'ordered' }, { list: 'bullet' }],
          ['link', 'image'],
          ['clean']
        ]
      }
    });

    document.querySelector('form').addEventListener('submit', function () {
      document.querySelector('#inputConteudo').value = quill.root.innerHTML;
    });
  </script>
</body>

</html>