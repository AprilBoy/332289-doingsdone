<?php
require_once('functions.php');
$page_content = include_template('templates\index.php');
$layout_content = include_template('templates\layout.php');
print($layout_content);
?>