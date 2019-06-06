<section id="cadastro">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">Cadastro</h2>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form action="<?=SITE?>cadastra" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite seu nome...">
            </div>
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" name="email" value="<?=$_POST['head_mail']?>" id="email" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
            </div>
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="text" name="cpf" id="cpf" class="form-control form-control-lg" placeholder="Digite seu CPF...">
            </div>
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="text" name="data_nascimento" id="data_nascimento" class="form-control form-control-lg" placeholder="Digite sua data de nascimento...">
            </div>
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Cadastre-se!">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  $('#data_nascimento').mask("00/00/0000");
  $('#cpf').mask("000.000.000-00");
</script>