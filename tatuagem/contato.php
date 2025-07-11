<?php include('page_parts/header.php'); ?>

  <main>
    <section class="contato">
      <h1>Fale Conosco</h1>
      <form class="formulario">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone">

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular">

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>

        <fieldset class="interesse">
          <legend>Interessado em:</legend>
          <label><input type="checkbox" name="interesse" value="tattoo"> Tattoo</label>
          <label><input type="checkbox" name="interesse" value="piercing"> Piercing</label>
        </fieldset>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="6"></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

<?php require('page_parts/footer.php'); ?>
