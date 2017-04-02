<?php
	$titleDescription = 'SPMR';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- UTF-8 Charset and viewport meta for bootstrap -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
    <title>
        <?= $titleDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

	<!-- JQuery 3.2.0 Latest Compiled Javascript through CDN -->
	<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'); ?>

	<!-- Bootstrap 3.3.7 Latest Compiled and Minified CSS and JavaScript through CDN -->
	<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
	<?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') ?>

	<!-- Project CSS -->
	<?= $this->Html->css('mains') ?>
	
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>



	<!-- Header -->
	<nav class="navbar navbar-default spmr_header">
		<div class="container-fluid">
			<div class="spmr_header_content">
			
				<!-- Header Title -->
				<div class="navbar-header spmr_header_title">
					<a class="navbar-brand" href="/">
						SPMR
					</a>
				</div>
			
				<!-- Header Navigation -->
				<ul class="nav navbar-nav spmr_header_shortcuts">
					<li class="active"><a href="/#project">Project</a></li>
					<li><a href="/#features">Features</a></li>
					<li><a href="/#developers">Developers</a></li>
				</ul>
				
			</div>
			
			<div class="spmr_header_user_auth">
				<?php
					
					if (empty($newUser)) $newUser = "true";
					if ($newUser != "false")
					{
						echo $this->Html->link(
							 'Login',
							 array('controller' => 'Users', 'action' => 'login')
						);

						echo $this->Html->link('Register',
							 array('controller' => 'Users', 'action' => 'register')
						);
					}
					else
					{
						echo $this->Html->link(
							 'Home',
							 array('controller' => 'Users', 'action' => 'home')
						);
					
						echo $this->Html->link(
							 'Logout',
							 array('controller' => 'Users', 'action' => 'logout')
						);
					}
				?>
			</div>
		<div>
	</nav>
	
	
	
	<!-- Content -->
	<?= $this->fetch('content') ?>
	
	
	
	<!-- Footer -->
    <footer class="container-fluid spmr_footer">
		<div class="row spmr_footer_section" id="footerContent">
			<div>
				<div class="col-md-8 col-xs-12 vertical_center footerContentTitle">
					Smartphone Meter Reading System
				</div>
				<div class="col-md-1 col-xs-3 vertical_center footerContentInfo">
					Feedback
				</div>
				<div class="col-md-1 col-xs-3 vertical_center footerContentInfo">
					Privacy
				</div>
				<div class="col-md-1 col-xs-3 vertical_center footerContentInfo">
					Terms
				</div>
			</div>
		</div>
    </footer>
	
	
	
</body>
</html>
