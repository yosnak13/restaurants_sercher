<?php
// $num = 10;
// if($num < 10){
//   print("hello world");
// }
// if($num < 10){
//   print("numは10より大きい");
// }else{
//   print("numは10以下");
// }
// if($num > 10){
//   print("numは10より大きい");
// }elseif($num < 10 and $num < 5){
//   print("numはより小さく、かつ5より小さい");
// }else{
//   print("numは10です");
// }

// function check($num){
//   if($num == 42){
//     print("Answer to the Ultimate Question of Life, the Universe, and Everything");
//   }else{
//     print("42ではない");
//   }
// }
// check(42);
$even_num = [];
$odd_num = [];
function sort_number($num){
  global $even_num, $odd_num;
  if($num % 2 == 0){
    push_array($even_num, $num);
  }else{
    push_array($odd_numm, $num);
  }
}
?>
