<!DOCTYPE html>
<?php session_start() ?>
<html>
	<head>
		<title>TESTE</title>
	</head>
	<body>

		<?php

			if(!isset($_SESSION['login'])){


				if(isset($_POST['acao'])){

					$login = 'kewin';
					$senha = '220761';

					$loginForm = $_POST['login'];
					$senhaForm = $_POST['senha'];


					if($login == $loginForm && $senha == $senhaForm){
						$_SESSION['login'] = $login;
						header('location: teste3.php');
					}else{

						echo 'Dados invalidos!';
					}
				}

				include('teste2.php');
			}else{

				if(isset($_GET['logout'])){
					unset($_SESSION['login']);
					session_destroy();
					header('Location: teste.php');
				}
				include('teste3.php');
			}

	


		?>



	</body>
</html>