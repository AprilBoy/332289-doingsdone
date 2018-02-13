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

function is_important_task($task_date) {
    date_default_timezone_set('Europe/Moscow');
    $deadline_ts = strtotime($task_date);
    $current_ts = strtotime('now midnight');
    return floor(($deadline_ts - $current_ts) / DAY_IN_SECONDS) <= 1;
}