<?php /* Smarty version 2.6.30, created on 2020-12-23 18:54:08
         compiled from mail_form_confirm.html */ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPメールフォーム・入力内容の確認</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.2/cerulean/bootstrap.min.css">
<link href="css/parts.css" rel="stylesheet">
<link href="css/php_mailform.css" rel="stylesheet" >
<link href="css/sample.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.btnclick.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg_form">

<div class="container">

<div class="row">
	<div class="col-sm-9">
		<h1 class="h2 logo"><i class="fa fa-envelope" aria-hidden="true"></i> php mailform  <span class="mini">Version 1.32</span></h1>
	</div>
	<div class="col-sm-3">
		<div class="mt20 pull-left mr15"><a href="./doc/index.html" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Manual</a></div>
		<div class="mt20 pull-left"><a href="http://econosys-system.com/freesoft/php_mailform.html" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download</a></div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
	<h1 class="h3 lc01 ml13">PHPメールフォームサンプル・入力内容の確認</h1>
	</div>
</div>


  <?php echo $this->_tpl_vars['mail_form_table_confirm']; ?>


</div><!-- [.container] -->



</body>
</html>
<!-- mail_form_confirm.html -->