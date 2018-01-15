<?php
session_start();

$page = "Nos Partenaires";
$lien = "../partenaire.php";
$breadcrumb = "Nos Partenaires";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('templates/head.html'); ?>
    <title><?php echo $page; ?></title>
    <link href="css/summernote.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    <?php require_once('templates/navbar.html'); ?>
    
    <div class = "container">
        <?php require_once('templates/breadcrumb.php'); ?>
        <?php require_once('templates/alertAdmin.php'); ?>
        
        <div class="row">
            <div class="summernote container">
	<div class="row">
		<div class="span12">
			<h2>POST DATA</h2>
			<pre>
			<?php print_r($_POST); ?>
			</pre>
			<pre>
			<?php echo htmlspecialchars($_POST['content']); ?>
			</pre>
		</div>
	</div>
	<div class="row">
		<form class="span12" id="postForm" action="/summernote.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
			<fieldset>
				<legend>Make Post</legend>
				<p class="container">
					<textarea class="input-block-level" id="summernote" name="content" rows"18">
					</textarea>
				</p>
			</fieldset>
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button type="button" id="cancel" class="btn">Cancel</button>
		</form>
		
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "500px"
	});
});
var postForm = function() {
	var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>
        </div>


    </div>
            
    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>
      
    <?php require_once('templates/footer-js.html'); ?> 
    <script src="js/summernote.js"></script>
</body>

</html>