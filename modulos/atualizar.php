<?
	$data_nascimento = DateTime::createFromFormat('d/n/Y', $_POST['data_nascimento'])->format('Y-m-d');
	try {
		$sql = "SELECT * FROM cadastros WHERE id = '{$_POST['id']}'";
		$consulta = $conn->query($sql);

		$row = $consulta->fetch(PDO::FETCH_ASSOC);
		if($data_nascimento == $row['data_nascimento']){
			?>
			<section id="cadastro">
			  <div class="overlay"></div>
			  <div class="container">
			    <div class="row">
			      <div class="col-xl-9 mx-auto">
			        <h2 class="mb-4">Atualização de Cadastro</h2>
			      </div>
			      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			        <form action="<?=SITE?>update" method="post" enctype="multipart/form-data">
			          <div class="form-row">
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="text" value="<?=$row['nome']?>" name="nome" id="nome" class="form-control form-control-lg"  placeholder="Digite seu nome...">
			            </div>
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="email" value="<?=$row['email']?>" name="email" id="email" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
			            </div>
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="text" value="<?=$row['cpf']?>" name="cpf" id="cpf" class="form-control form-control-lg" placeholder="Digite seu CPF...">
			            </div>
			            <input type="hidden" name="id" value="<?=$row['id']?>">
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Atualize seu cadastro!">
			            </div>
			            <br>
			            <p style="font-size:10px; color:#696969"><a style="color: red">*</a>Para atualizar seu e-mail, verifique sua data de nascimento na próxima tela.</p>
			          </div>
			        </form>
			      </div>
			    </div>
			  </div>
			</section>
			<?
		}else{
			?>
				<script>
					alert("Data de nascimento inválida.");
					history.go(-1);
				</script>
			<?
		}
	} catch (PDOException $e) {
		?>
			<script>
				alert(<?=$e->getMessage()?>);
				history.go(-1)
			</script>
		<?
	}
?>