<nav class="navbar navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="<?=SITE?>">Notícias Online</a>
    <a class="btn btn-primary" href="<?=SITE?>cadastro">Cadastre-se</a>
    <a class="btn btn-primary" href="<?=SITE?>consulta">Consultar Cadastro</a>
  </div>
  <div>
  </div>
</nav>
<? if($_GET['a'] == ""){ ?>
<header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Não perca tempo e assine o maior, e com melhor usabilidade, jornal web do Brasil!</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form action="<?=SITE?>cadastro" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" id="head_mail" name="head_mail" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
            </div>
            <div class="col-12 col-md-3">
                <input type="submit" class="btn btn-block btn-lg btn-primary" value="Cadastre-se!">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<?
  }
?>