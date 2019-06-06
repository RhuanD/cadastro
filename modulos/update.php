<?	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	try {
		$sql = "UPDATE cadastros SET  nome = '$nome', email = '$email', cpf = '$cpf' WHERE id = '{$_POST['id']}'";
		if($conn->query($sql)){
			?>
				<script>
					alert('Sucesso ao alterar registro');
					document.location.href="<?=SITE?>";
				</script>
			<?
		}
	} catch (Exception $e) {
		?>
			<script>
				alert(<?=$e->getMessage?>);
				history.go(-1);
			</script>
		<?
	}
?>