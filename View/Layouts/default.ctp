<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>	<html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>	<html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>	<html class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php __('Mister Machine: Heart'); ?><?php echo $title_for_layout; ?></title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon')); ?>
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

	<!-- open graph -->
	<meta property="og:title" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content=""/>
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta property="fb:app_id" content="" />
	<!-- end open graph -->

	<?php echo $this->Html->css(array('base', 'grid')); ?>

	<?php echo $scripts_for_layout; ?>
</head>


<body>

	<div class="page">

		<div class="toolbox">
			<div class="tools container_12">
				<div class="account prefix_8 grid_4">
					<ul class="right">
					<?php if(isset($user)) : ?>
						<li><?php echo $this->Html->link(__('Log Out'), '/users/logout'); ?></li>
						<li><?php echo $this->Html->link($user['username'], '/users/view/'.$user['id']); ?></li>
					<?php else : ?>
						<li><?php echo $this->Html->link(__('Register'), '/users/add'); ?></li>
						<li><?php echo $this->Html->link(__('Sign In'), '/users/login'); ?></li>
					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>

		<header>
			<div class="hgroup container_12">
				<div class="logo grid_4">
					<strong><?php echo __('Heart'); ?></strong>
				</div>
				<nav class="grid_8">
					<!-- main menu -->
				</nav>
			</div>
		</header>

		<div class="messages">
			<section class="container_12">
				<?php echo $this->Session->flash(); ?>
			</section>
		</div>

		<div class="content">
		
			<div class="wide banner">
				<section class="container_12">
					<article class="grid_12">
						<h1><?php __('Death Star'); ?></h1>
						<p><?php __('That\'s no moon... that\'s a space station.'); ?></p>
					</article>
				</section>	
			</div>

			<div class="full container_12">
				<section class="single clearfix">
					<article>
						<div class="grid_1">
							<?php echo $content_for_layout; ?>
						</div>
					</article>
				</section>
			</div>

		</div>

		<div>
			<footer>
				<div class="inner container_12">
					<div class="grid_6">
						<p>&copy; <?php echo date('Y'); ?> Mister Machine, LLC - <?php __('all rights reserved'); ?></p>
					</div>
					<div class="grid_6">
						<!-- footer menu -->
					</div>
				</div>
			</footer>
		</div>

	</div>

	<?php //debug($this->Session, true); ?>
	<?php //debug($user, true); ?>
	<?php //echo $this->element('sql_dump'); ?>

</body>
</html>