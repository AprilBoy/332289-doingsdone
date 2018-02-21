<?php
require_once('functions.php');
require_once('data.php');
require_once('config.php');


$cat_id = null;
$filtred_tasks = $tasks;
$classname = '';

if (isset($_GET['cat_id'])) {
	$cat_id = intval($_GET['cat_id']);
	$filtred_tasks = get_tasks_from_project($tasks, $categories, $cat_id);

}

// if($_SERVER['REQUEST_METHOD'] === 'POST') {
// 	$new_task = $_POST;

// 	$required = ['name', 'project'];
// 	$dict = ['name' => 'Название', 'project' => 'Проект'];
// 	$errors = [];

// 	foreach ($required as $key) {
// 		if (empty($_POST[$key])) {
// 			$errors[$key] = 'Это поле надо заполнить';
// 		}
// 	}

// 	if (count($errors)) {
// 		$task_form = get_template('new_task', ['new_task' => $new_task, 'errors' => $errors, 'dict' => $dict ]);
// 	}

// }
// else{
// 	$task_form = get_template('new_task', []);
// }


if (isset($_GET['add'])) {
	$classname = 'overlay';
	require_once('templates/new_task.php');
}

$page_content = get_template('main', [
	'categories' => $categories,
	'tasks' => $filtred_tasks,
	'show_complete_tasks' => rand(0, 1)
]);

$layout_content = get_template('layout', [
	'content' => $page_content,
	// 'task_form' => $task_form,
	'title' => 'Дела в порядке',
	'categories' => $categories,
	'tasks' => $tasks,
	'cat_id' => $cat_id
]);

print($layout_content);

