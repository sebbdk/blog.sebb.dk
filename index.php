<?php  include('lib/function.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Blog Sebb.dk</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo baseUrl(); ?>/css/screen.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<h1>
		<div class="content-restraint">
			Sebb <small>like teck'n stuff</small>		
		</div>
	</h1>
	

	<?php if($document = getDocument()) : ?>
		<h3>
			<div class="content-restraint">
				<?php echo $document['meta']['title']; ?>
			</div>
		</h3>

		<div class="content">
			<div class="markdown"><?php echo $document['text']; ?></div>
		</div>
	<?php endif; ?>

	<div class="content">
		<h4>Other readings</h4>
		<div class="other">
			<?php 
				foreach(getDocuments() as $document) {
					echo '<a href="'. baseUrl() . $document['slug'] . '">' . $document['name'] . '</a>';
				}
			?>
		</div>
	</div>

	<script src="<?php echo baseUrl(); ?>/js/vendor/jquery/dist/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo baseUrl(); ?>/js/vendor/markdown/lib/markdown.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo baseUrl(); ?>/js/app.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>