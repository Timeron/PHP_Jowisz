<div id='header'>
	<div id='headerTopBox'>
		<div id='headerUserData'></div>
		<div id='headerLanguage'></div>
	</div>
	<div id='headerCenterBox'>
		<div id='headerLogo'>headerLogo</div>
		<div id='headerShopArea'>headerShopArea</div>
	</div>
	<div id='headerBottomBox'>
		<div id='headerMenu'>
<?php 
if(is_array($headerMenu) ){
	if(count($headerMenu) > 1){
		echo '<div class="btn-group">';
		foreach ($headerMenu as $key => $value){
			echo		'<div type="button" class="btn btn-default">'.$value.'</div>';
		}
		echo '</div>';
	}else{
		foreach ($headerMenu as $key => $value){
			echo		'<div type="button" class="btn btn-default">'.$value.'</div>';
		}
	}
}
?>
		</div>
	</div>
</div>