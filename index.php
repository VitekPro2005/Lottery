<?php
function lottery(){
  $ticketnumbers = [];
  while (count($ticketnumbers) <6) {
    $randomticketnumber = rand (1, 49);
    if (!in_array($randomticketnumber, $ticketnumbers)) {
      $ticketnumbers[] = $randomticketnumber;
    }
  }
  rsort($ticketnumbers);
  return $ticketnumbers;
}
$lotteryticket = lottery();
echo "Your ticket:" . implode(", ", $lotteryticket);
?>