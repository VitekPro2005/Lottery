<?php
function lottery(){
  //объявляем функцию, которая будет генерировать случайные числа
  $ticketnumbers = range(1, 49);
  shuffle($ticketnumbers);
  $randomticket = array_slice($ticketnumbers, 0, 6);
  rsort($randomticket);
  return $randomticket;
}
echo "Your ticket: " . implode(", ", lottery()) . PHP_EOL;
//выводим на экран результат, implode разделяет элементы запятой с пробелой
?>