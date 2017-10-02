<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $title; ?>
	</title>

  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107382942-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
          dataLayer.push(arguments)
      };
      gtag('js', new Date());

      gtag('config', 'UA-107382942-1');

  </script>

	<link rel="stylesheet" type="text/css" href="<?= base_url(" main.css ") ?>">
	<link rel="stylesheet" type="text/css" href=" <?= base_url(" bootstrap/css/bootstrap.min.css ") ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
	crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
	crossorigin="anonymous"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="<?= base_url(" assets/ckeditor/ckeditor.js ") ?>"></script>

</head>

<body>
	<!-- HEADER -->
	<div class="container-fluid" style="position: relative">
		<div class="row">
			<div class="col" id="box-logo">
				<a href="">
                    <img src="img/logo.fw.png" class="img-responsive center-block" id="logo">
                </a>
			</div>
		</div>
	</div>
	<div class="container-fluid no-padding-lateral">
		<div class="col no-padding-lateral">
			<img src="img/bannerprincipal.fw.png" class="img-responsive" id="banner">
		</div>
	</div>
	<div class="container-fluid menu-principal">
		<div class="row">
			<div class="offset-1 col">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="">
							<h5 id="saude">SAÚDE</h5>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="">
							<h5 id="nutricao">NUTRIÇÃO</h5>
						</a>
					</li>
				</ul>
			</div>
			<div class="offset-1 col">
				<ul class="list-inline">
					<li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/MEUCORPOEMFORMAOFICIAL" title="Facebook"><img src="<?= base_url("img/facebook.png") ?>" alt="icons" class="icons"></a></li>
					<li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/meucorpoemformaoficial/" title="Instagram"><img src="<?= base_url("img/instagram.png") ?>" alt="icons" class="icons"></a></li>
					<li class="list-inline-item"><a target="_blank" href="" title="Twitter"><img src="<?= base_url("img/twitter.png") ?>" alt="icons" class="icons"></a></li>
				</ul>
			</div>
		</div>
	</div>
