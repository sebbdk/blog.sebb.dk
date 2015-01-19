<?php  include('lib/function.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>blog.Sebb.dk</title>

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

			<h4>Throw me a comment:</h4>

			<div class="fb-comments" data-href="<?php echo getFullUrl(); ?>" data-numposts="10" data-width="760" data-colorscheme="dark"></div>

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=759291594161922&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		</div>
	<?php endif; ?>

	<div class="content">
		<h4>Other readings</h4>
		<div class="other">
			<?php 
				foreach(getDocuments() as $document) {
					echo '<a href="'. baseUrl() . '/' . $document['slug'] . '">' . $document['name'] . '</a>';
				}
			?>
		</div>
	</div>

	<script src="<?php echo baseUrl(); ?>/js/vendor/jquery/dist/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo baseUrl(); ?>/js/vendor/markdown/lib/markdown.js" type="text/javascript" charset="utf-8"></script>
	<script src="//track.sebb.dk/js/track.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo baseUrl(); ?>/js/app.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>