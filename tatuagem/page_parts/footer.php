  <footer class="rodape">
    <p>Desenvolvido por: Dev i9 - Copyright <?php echo date('Y'); ?> - Todos os direitos reservados</p>
  </footer>

  <script>
    const btn = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('aberto');
    });
  </script>
</body>
</html>