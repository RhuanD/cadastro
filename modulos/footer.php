
  <!-- Call to Action -->
  <?
    if($_GET['a'] == ""){
  ?>
  <section class="call-to-action text-white text-center" id="mail_foot">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Pronto para começar? Assine agora mesmo e receba um mês grátis!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form action="<?=SITE?>cadastro" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" name="head_mail" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
              </div>
              <div class="col-12 col-md-3">
                <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Cadastre-se!">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?
    }
  ?>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Notícias Online 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://facebook.com/rhuan-dornelles" target="new">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a target="new" href="https://twitter.com/Kengenlicious">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a target="new" href="https://instagram.com/thatkgn">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>