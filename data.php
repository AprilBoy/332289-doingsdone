<?php
$show_complete_tasks = rand(0, 1);
$categories = ["Все","Входящие","Учеба","Работа","Домашние дела","Авто"];
$tasks = [
  [   
    'task' => 'Собеседование в IT компании',
    'deadline' => '01.06.2018',
    'category' => 'Работа',
    'status' => ''
  ],
  [   
    'task' => 'Выполнить тестовое задание',
    'deadline' => '25.05.2018',
    'category' => 'Работа',
    'status' => ''
  ],
  [   
    'task' => 'Сделать задание первого раздела',
    'deadline' => '21.04.2018',
    'category' => 'Учеба',
    'status' => true
  ],
  [   
    'task' => 'Встреча с другом',
    'deadline' => '22.04.2018',
    'category' => 'Входящие',
    'status' => ''
  ],
  [  
   'task' => 'Купить корм для кота',
   'deadline' => '',
   'category' => 'Домашние дела',
   'status' => ''
 ],
 [  
   'task' => 'Заказать пиццу',
   'deadline' => '',
   'category' => 'Домашние дела',
   'status' => ''
 ]
];