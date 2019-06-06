<section id="cadastro">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">Consulte seu cadastro</h2>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form action="<?=SITE?>consultar" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
            </div>
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Consultar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>