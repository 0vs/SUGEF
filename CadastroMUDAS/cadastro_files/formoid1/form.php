<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Cadastrado com sucesso!
');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-dark" style="background-color:#FFFFFF;font-size:13px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post"><div class="title"><h2>Cadastro Animal</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Brinco"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" name="input" required="required" placeholder="Brinco"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Nome"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input1" required="required" placeholder="Nome"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio1"); ?>" title="Espécie"><label class="title">Espécie<span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio1" value="Caprino" required="required"/><span>Caprino</span></label><label><input type="radio" name="radio1" value="Ovino" required="required"/><span>Ovino</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input<?php frmd_add_class("input2"); ?>" title="Raça"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" name="input2" required="required" placeholder="Raça"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>" title="Sexo"><label class="title">Sexo<span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio" value="Macho" required="required"/><span>Macho</span></label><label><input type="radio" name="radio" value="Fêmea" required="required"/><span>Fêmea</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number<?php frmd_add_class("number"); ?>" title="Peso"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" min="0" max="1000" name="number" required="required" placeholder="Peso" value=""/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date"); ?>" title="Data de Nascimento"><label class="title"></label><div class="item-cont"><input class="small" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Data de Nascimento"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"></label><div class="item-cont"><input class="small" type="text" min="0" max="100" name="number1" placeholder="Brinco do Pai" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number2"); ?>"><label class="title"></label><div class="item-cont"><input class="small" type="text" min="0" max="100" name="number2" placeholder="Brinco da Mãe" value=""/><span class="icon-place"></span></div></div>
	<div class="element-file<?php frmd_add_class("file"); ?>" title="Foto"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="medium" ><div class="button">Selecionar foto</div><input type="file" class="file_input" name="file" required="required"/><div class="file_text">Nenhuma foto selecionada</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Cadastrar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>