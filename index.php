<?php
require_once('functions.php');
require_once('data.php');
require_once('config.php');


$cat_id = null;
$filtred_tasks = $tasks;

if (isset($_GET['cat_id'])) {
    $cat_id = intval($_GET['cat_id']);
    $filtred_tasks = get_tasks_from_project($tasks, $categories, $cat_id);

}



 
$page_content = get_template('main', [
	'categories' => $categories,
	'tasks' => $filtred_tasks,
	'show_complete_tasks' => rand(0, 1)
]);

$layout_content = get_template('layout', [
	'content' => $page_content,
	'title' => 'Дела в порядке',
	'categories' => $categories,
	'tasks' => $tasks,
	'cat_id' => $cat_id
]);

print($layout_content);

