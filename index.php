<?php require_once('header.php'); ?>

<div class="container content">
	<div class="featured-games">
		<h2>Featured Games</h2>
		
		<div id="featured-games-slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active text-center">
					<div class="col-sm-3">
						<img src="img/carousel-1.jpg">
						<a href="#" class="link">Visit Site</a>
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-2.jpg">
						<a href="#" class="link">Visit Site</a>
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-3.jpg">
						<a href="#" class="link">Visit Site</a>
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-4.jpg">
						<a href="#" class="link">Visit Site</a>
					</div>
				</div>
				<!--
				<div class="item">
					<div class="col-sm-3">
						<img src="img/carousel-1.jpg">
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-2.jpg">
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-3.jpg">
					</div>
					<div class="col-sm-3">
						<img src="img/carousel-4.jpg">
					</div>
				</div>
				-->
			</div>
			
			<a class="left carousel-control" href="#featured-games-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#featured-games-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
	
<?php require_once('footer.php'); ?>