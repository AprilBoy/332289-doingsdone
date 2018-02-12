  <?php 
  date_default_timezone_set("Europe/Moscow");
  foreach ($tasks as $key => $value) {
   $ts = time();
    $secs_in_day = 86400;
    $deadline_time =  strtotime($value['deadline']);
    $ts_diff = $deadline_time - $ts;
    $days_until_end = floor($ts_diff / $secs_in_day);
  }

  ?>
  <h2 class="content__main-heading">Список задач</h2>
  <form class="search-form" action="index.html" method="post">
    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">
    <input class="search-form__submit" type="submit" name="" value="Искать">
  </form>
  <div class="tasks-controls">
    <nav class="tasks-switch">
      <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
      <a href="/" class="tasks-switch__item">Повестка дня</a>
      <a href="/" class="tasks-switch__item">Завтра</a>
      <a href="/" class="tasks-switch__item">Просроченные</a>
    </nav>
    <label class="checkbox">
      <a href="/">
       <input class="checkbox__input visually-hidden" type="checkbox"
       <?php if ($show_complete_tasks === 1): ?>
         checked
       <?php endif; ?>
       >
       <!--добавить сюда аттрибут "checked", если переменная $show_complete_tasks равна единице-->
       <span class="checkbox__text">Показывать выполненные</span>
     </a>
   </label>
 </div>
 <table class="tasks">
  <?php foreach ($tasks as $key => $value): ?>
    <tr class="tasks__item task
    <?php if ($value['status'] === true):?>
      task--completed
    <?php elseif($days_until_end <= 1):?> 
      task--important
    <?php endif ?>
    ">
    <td class="task__select">
      <label class="checkbox task__checkbox">
        <input class="checkbox__input visually-hidden" type="checkbox">
        <a href="/"><span class="checkbox__text"><?=$value['task'];?></span></a>
      </label>
    </td>
    <td class="task__file">
    </td>
    <td class="task__date"><?=$value['deadline'];?></td>
  </tr>
<?php endforeach ?>
</table>