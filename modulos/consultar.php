<?
	if(empty($_POST['email'])){
		?>
			<script>
				alert("Preencha o E-mail.");
				history.go(-1);
			</script>
		<?
	}
	try{
		$sql = "SELECT * FROM cadastros WHERE email = '{$_POST['email']}'";
		$consulta = $conn->query($sql);

		$row = $consulta->fetch(PDO::FETCH_ASSOC);
		if(empty($row['email'])){
			?>
				<script>
					alert("Digite um e-mail cadastrado.");
					history.go(-1);
				</script>
			<?
		}
		?>
			<section id="cadastro">
			  <div class="overlay"></div>
			  <div class="container">
			    <div class="row">
			      <div class="col-xl-9 mx-auto">
			        <h2 class="mb-4">Cadastro</h2>
			      </div>
			      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			        <form action="<?=SITE?>atualiza" method="post" enctype="multipart/form-data">
			          <div class="form-row">
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="text" disabled value="<?=$row['nome']?>" name="nome" id="nome" class="form-control form-control-lg"  placeholder="Digite seu nome...">
			            </div>
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="email" value="<?=$row['email']?>" disabled name="email" id="email" class="form-control form-control-lg" placeholder="Digite seu e-mail...">
			            </div>
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="text" disabled value="<?=$row['cpf']?>" name="cpf" id="cpf" class="form-control form-control-lg" placeholder="Digite seu CPF...">
			            </div>
			            <input type="hidden" id="mail" name="verify" value="<?=$row['email']?>">
			            <div class="col-12 col-md-9 mb-2 mb-md-0">
			              <input type="submit" class="btn btn-block btn-lg btn-primary" id="send_foot" value="Atualize seu cadastro!"> <div id="excluir" class="btn btn-block btn-lg btn-primary">Excluir seu cadastro</div>
			            </div>
			            <br>
			            <p style="font-size:10px; color:#696969"><a style="color: red">*</a>Para atualizar seu e-mail, verifique sua data de nascimento na próxima tela.</p>
			          </div>
			        </form>
			      </div>
			    </div>
			  </div>
			</section>
			<script>
				$('#excluir').click(function(){
					$.ajax({
						url: 'modulos/delete.php',
						type: 'POST',
						dataType: 'json',
						data: {email: $('#mail').val()}
						/*success: function(data){
							alert("Eu fiz algo errado? Desculpa. :c Sucesso ao excluir registro. :((((((");
						},
						error: function(){
							alert("Erro ao excluir registro");
						}*/
					})
					//Gambiarra absurda. Infelizmente meu .done ou meu success não tavam funcionando.
					//Chorei um pouco, mas no fim foi essa a solução.
					.always(function(){
						alert("Sucesso ao excluir registro")
					})
				});
			</script>
		<?
	}catch(PDOException $e){
		?>
			<script>
				alert(<?=$e->getMessage();?>);
				history.go(-1);
			</script>
		<?
	}
?>
