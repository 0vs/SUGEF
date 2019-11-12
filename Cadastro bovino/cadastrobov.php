<?php $form_path='cadastrobov_files/formoid1/form.php'; require_once $form_path; ?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Cadastrar Animal - Formoid javascript form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

	<?php
	$nome = $_REQUEST['input'];
	$cod = $_REQUEST['number'];
	
	echo "Cadastrado o animal $cod de nome $nome";
	?>
</body>
</html>
