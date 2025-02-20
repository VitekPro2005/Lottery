<?php
function lottery(){
  //объявляем функцию, которая будет генерировать случайные числа
  $ticketnumbers = [];
  //создаем пустой массив, который будет хранить сгенерированные числа
  while (count($ticketnumbers) <6) {
    $randomticketnumber = rand (1, 49);
    //цикл будет выполнять пока в массиве не наберётся 6 элементов, генерируем случайное число и сохраняем в переменную
    if (!in_array($randomticketnumber, $ticketnumbers)) {
      $ticketnumbers[] = $randomticketnumber;
    }
    //если сгенерированное число НЕ содержится в массиве, то оно добавляется к массиву
  }
  rsort($ticketnumbers);
  //сортируем массив в обратном порядке, просто потому что
  return $ticketnumbers;
  //возвращаем массив
}
echo "Your ticket:" . implode(", ", lottery());
//выводим на экран результат, implode разделяет элементы запятой с пробелой
?>