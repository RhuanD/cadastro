<?
	include('../utils/connect.php');
	$email = $_POST['email'];
	try {
		$sql = "DELETE FROM cadastros WHERE email = '$email'";
		$conn->query($sql);
		return true;
	} catch (PDOException $e) {
		echo $e->getMessage();
		return false;
	}
?>