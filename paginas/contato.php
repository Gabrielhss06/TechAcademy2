
 <form action="processa_formulario.php" method="POST">
    <section id="contato" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center">Contato</h2>
      <p class="text-center mb-4">Se você tiver alguma dúvida, sugestão ou gostaria de entrar em contato para discutir um projeto, por favor, utilize o formulário abaixo. Ficarei feliz em responder o mais breve possível!</p>
      <form>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" placeholder="Seu nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Seu email">
        </div>
        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <textarea class="form-control" id="mensagem" rows="3" placeholder="Sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success me-2 ">Enviar</button>
      </form>
    </div>
  </section>
</form>


  