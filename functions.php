<?php 
function get_template(string $file_path, array $data){
	if (file_exists(TEMPLATE_DIR_PATH.$file_path.TEMPLATE_EXT)) {
		extract($data);
ob_start();
 require_once(TEMPLATE_DIR_PATH.$file_path.TEMPLATE_EXT);
 ob_end_flush();
}
return '';
}
