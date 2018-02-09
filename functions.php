<?php 
function include_template($layout_path){
	if (file_exists($layout_path)) {
		echo $layout_path;
	}
	else
	{
		echo'';
	}
include $layout_path;
ob_start();
  
ob_end_flush();
return $layout_path;
}