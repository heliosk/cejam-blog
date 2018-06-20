<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		BLOG
	</title>
	<?php
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('style');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
			<a class="navbar-brand" href="#">CEJAM/BLOG</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<?= $this->Html->link('Posts', array('controller'=>'posts', 'action'=>'index'), array('class'=>'nav-item nav-link')); ?>
					</li>
					<li class="nav-item">
						<?= $this->Html->link('Autores', array('controller'=>'authors', 'action'=>'index'), array('class'=>'nav-item nav-link')); ?>
					</li>
					<li class="nav-item">
						<?= $this->Html->link('Tags', array('controller'=>'tags', 'action'=>'index'), array('class'=>'nav-item nav-link')); ?>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container"><br/>
		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">2018 cakephp v2.10.10</span>
		</div>
	</footer>

	<?php echo $this->Html->script('jquery-3.2.1.slim.min'); ?>
	<?php echo $this->Html->script('popper.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
