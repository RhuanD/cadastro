<?
	if(empty($_POST['nome'])){
		?>
			<script>
				alert("Preencha o nome.");
				history.go(-1);
			</script>
		<?
	}
	if(empty($_POST['email'])){
		?>
			<script>
				alert("Preencha o E-mail.");
				history.go(-1);
			</script>
		<?
	}
	if(empty($_POST['cpf'])){
		?>
			<script>
				alert("Preencha o CPF.");
				history.go(-1);
			</script>
		<?
	}
	try{
		$data = DateTime::createFromFormat('d/n/Y', $_POST['data_nascimento'])->format('Y-m-d');
		$sql = "INSERT INTO cadastros (nome, email, cpf, data_nascimento) VALUES (:nome,:email,:cpf,:data_nascimento)";
		$stmt = $conn->prepare($sql);
		$stmt->execute(array(
			':nome' => $_POST['nome'],
			':email' => $_POST['email'],
			':cpf' => $_POST['cpf'],
			':data_nascimento' => $data
		));
		?>
			<script>
				alert("Sucesso ao inserir registro");
				window.location.href="<?=SITE?>"
			</script>
		<?
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
?>