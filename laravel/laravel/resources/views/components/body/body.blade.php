<div id='body'>
	<div id='bodyTop'>
		<div id='bodyNavigation'>bodyNavigation</div>
	</div>
	
	<div id='bodyCenter'>
		<nav id='bodyNav'>
			<div class='bodyNavSection btn-group-vertical'>
			<?php 
			foreach($bodyNavSection as $key => $value){
				echo '<div type="button" class="btn btn-default">'.$value.'</div>';
			}
			
			?>
			</div>
		</nav>
		
		<div id='bodySection'>	
			<?php 
			foreach($bodySectionArticle as $key => $value){
echo			"<section class='bodySection'>";
echo 				"<div class='bodySectionHeader'>". $value['bodySectionHeader'] ."</div>";
echo				"<div class='bodySectionArticle'>". $value['bodySectionArticle'] ."</div>";
echo				"<div class='bodySectionFooter'>". $value['bodySectionFooter'] ."</div>";
echo 			"</section>";
			}
			?>
 			<section class='bodySection'>
 				<div class='bodySectionBox'>bodySectionBox</div>
 				<div class='bodySectionBox'>bodySectionBox</div>
 				<div class='bodySectionBox'>bodySectionBox</div>
 			</section>
		</div>
		
		<aside id='bodyAside'>
			<div class='bodyAsideSection'>bodyAsideSection</div>
		</aside>
	</div>
	
	<div id='bodyBottom'>
		bodyBottom
	</div>	
</div>