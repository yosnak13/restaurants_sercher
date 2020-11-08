<?php
// for ($i = 1; $i <=10; $i++) {
//   print("Hello World!"."\n");
// }
// $animals = ["dog", "cat", "bird"];
// foreach ($animals as $animal) {
//   print($animal."\n");
// }

// for ($i = 1; $i < 30; $i++ ){
//   if($i % 3 == 0){
//     print("3倍数です"."\n");
//   }else{
//     print($i."\n");
//   }
// }

//演習1
// for ($i = 1; $i <= 30; $i++){
//   print($i."\n");
// }

//演習2
// for ($i = 1; $i <= 30; $i++){
//   if($i % 5 == 0){
//     print("Buzz"."\n");
//   }else{
//     print($i."\n");
//   }
// }

//演習3
for ($i = 1; $i <= 30; $i++){
  if($i % 15 == 0){
    print("FizzBuzz"."\n");
  }elseif($i % 5 == 0){
    print("Buzz"."\n");
  }elseif($i % 3 == 0){
    print("Fizz"."\n");
  }else{
    print($i."\n");
  }
}
?>
