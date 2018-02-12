<?php 
function get_template(string $file_path, array $data){
	if (file_exists(TEMPLATE_DIR_PATH.$file_path.TEMPLATE_EXT)) {
		extract($data);
		ob_start();
		require_once(TEMPLATE_DIR_PATH.$file_path.TEMPLATE_EXT);
		return ob_get_clean();
	}
	return '';
}

function get_project_test_count($tasks, $project_name){
	if ($project_name === 'Все'){
		return count ($tasks);
	}

	$result = 0;
	foreach ($tasks as $item){
		if ($item['category'] === $project_name){
			$result++;
		}
	}
	return $result;
}


