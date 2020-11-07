<?php
// function hello ($a, $b){
//   print($a + $b);
// }
// hello (21, 29);

// function hello ($a = 21){
//   print($a);
// }
// hello();
// hello("hello world");

// function add ($a, $b){
//   return $a + $b;
// }
// $num = add(2, 3);
// print($num);

//足し算
// function calc($a, $b){
//   print($a * $b);
// }
// calc(2, 3)

//三角形の面積
// function triangle_area($a, $h){
//   return $a * $h / 2;
// }
// print(triangle_area(5, 5));

$file_list = [];
function add_list($name){
  global $file_list;
  $file_name = $name.".php";
  array_push($file_list, $file_name);
}
add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);
?>
