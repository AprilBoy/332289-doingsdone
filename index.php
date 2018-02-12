<?php
define('TEMPLATE_DIR_PATH', 'templates/');
define('TEMPLATE_EXT', ".php");
require_once('functions.php');
require_once('data.php');
$page_content = get_template('main', [
	'categories' => $categories,
	'tasks' => $tasks,
'show_complete_tasks' => rand(0, 1)]);
$layout_content = get_template('layout', [
	'content' => $page_content,
	'title' => 'Дела в порядке',
	'categories' => $categories,
	'tasks' => $tasks
]);
print($layout_content);
