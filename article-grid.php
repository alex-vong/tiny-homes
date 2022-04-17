<section class="grid-container">
	
	<div class="main-card">
		<h2 class="stern-voice">
			This is an "Article Grid" module. This is it's heading. 
		</h2>
		<p class="calm-voice">
			Again, we totally just made that up. It is a box with boxes in it.
		</p>
	</div>

	<section class="card-grid-container">

	<?php include('article-grid-info.php'); ?>

	<?php 

		foreach ($gridInfo as $key) {  ?>
		<div class="cards">
			<picture style='background-image: url(<?=$key["img"]?>)'>
				<!-- <img src="<?=$key["img"]?>" alt=""> -->
			</picture>

			<div class="card-info">
				<h2 class="stout-voice"><?=$key["head"]?></h2>
				<p class="calm-voice"><?=$key["text"]?></p>
				<button class="calm-voice"><?=$key["button"]?></button>
			</div>
				</div>
	<?php }

	  ?>




	</section>
	
</section>