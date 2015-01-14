<?php include('lib/function.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog Sebb.dk</title>

	<link rel="stylesheet" href="<?php echo baseUrl(); ?>css/screen.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<div class="content">
		<h1>Sebb <small>like teck'n stuff</small></h1>
		
		<h3><?php echo getName(); ?></h3>
		<div class="markdown">
			<?php echo getDocument(); ?>
		</div>
	</div>

	<div>
		<?php //print_r(getDocuments()); ?>
	</div>

	<script src="<?php echo baseUrl(); ?>js/vendor/jquery/dist/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="<?php echo baseUrl(); ?>js/vendor/markdown/lib/markdown.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="<?php echo baseUrl(); ?>js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>