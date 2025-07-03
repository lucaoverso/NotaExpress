<h2>Acessar uma nota existente</h2>
<form action="/notaexpress/public/index.php" method="get">
  <input type="hidden" name="rota" value="acessar">
  <label for="codigo">Digite o código:</label><br>
  <input type="text" name="codigo" required>
  <button type="submit">Acessar</button>
</form>