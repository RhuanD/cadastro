<?
	try{
		$sql = "SELECT * FROM cadastros WHERE email = '{$_POST['verify']}'";
		$consulta = $conn->query($sql);
		$row = $consulta->fetch(PDO::FETCH_ASSOC);
		?>
		<section id="cadastro">
		  <div class="overlay"></div>
		  <div class="container">
		    <div class="row">
		      <div class="col-xl-9 mx-auto">
		        <h2 class="mb-4">Atualize seu e-mail</h2>
		      </div>
		      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
		        <form action="<?=SITE?>atualizar" method="post" enctype="multipart/form-data">
		          <div class="form-row">
		            <div class="col-12 col-md-9 mb-2 mb-md-0">
		              <input type="text" name="data_nascimento" id="data_nascimento" class="form-control form-control-lg" placeholder="Verifique sua data de nascimento...">
		            </div>
		            <input type="hidden" name="id" value="<?=$row['id']?>">
		            <div class="col-12 col-md-9 mb-2 mb-md-0">
		              <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Atualizar">
		            </div>
		          </div>
		        </form>
		      </div>
		    </div>
		  </div>
		</section>
		<script>
		  $('#data_nascimento').mask("00/00/0000");
		</script>
	<?
	}catch(PDOException $e){
		?>
		<script>
			alert($e->getMessage());
			history.go(-1);
		</script>
		<?
	}
?>