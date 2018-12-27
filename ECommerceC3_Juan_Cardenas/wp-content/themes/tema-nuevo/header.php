<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0 ">
	<title></title>
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="row">
			<div class="col m2 l2">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.PNG">
				<div class="input-field	">
					<i class="material-icons prefix">search</i><input type="search">
				</div>
			</div>
			<div class="col m10 l10">
				<nav class="nav-wrapper">
						<ul id="nav-mobile" class="left">
							<li class="white-text"><a>
								<?php 
									wp_nav_menu(array(
										'theme_location'=>'menu_principal'
									));
								?>
							</a></li>
						</ul>
					</nav>
			</div>
		</div>
	</header>

