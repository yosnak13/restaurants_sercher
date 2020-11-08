<?php
#クラスの作成
// class Human
// {
//   static $class_name = "Human";

//   function init(){
//     $this->name = "大泉";
//   }
//   public function show() {
//     print($this->name."\n");
//   }
//   public static $class_call_count = 0;

//     # Humanクラスのインスタンスが作られる度に、class_call_countが増えていく
//     function __construct(){
//         self::$class_call_count +=1;
//     }
// }
// new Human();
// print Human::$class_call_count;
// # => 1

// new Human();
// print Human::$class_call_count;
// # => 2

// new Human();
// print Human::$class_call_count;
// # => 3


#クラス変数の複数定義付け
// class Human
// {
//   public static $str = null;
//   public static $num = 0;
// }
// Human::$str = "Hello";
// Human::$num = 42;

// print(human::$str."\n");
// print(human::$num."\n");


#インスタンス変数について
// class Hoge
// {
//   #__constractメソッドでインスタンス変数を定義
//   function __construct(){
//     $this->name = "大泉";
//     $this->age = 46;
//   }
// }
// $hoge = new Hoge();

// $hoge->name = "藤村";
// $hoge->age = 54;

// print($hoge->name);
// print($hoge->age);


// class Hoge
// {
//   #__constractメソッドでインスタンス変数を定義
//   function __construct(){
//     $this->name = "大泉";
//   }
// }
// $hoge = new Hoge();

// $hoge->name = "藤村";
// #後からageというインスタンスを追加している
// $hoge->age = 54;

// print($hoge->name);
// print($hoge->age);


#インスタンスごとに異なる値を持つことも可能
// class Hoge
// {
//   #__constractメソッドでインスタンス変数を定義
//   function __construct(){
//     $this->name = null;
//   }
// }
// $hoge1 = new Hoge();
// $hoge1->name = "大泉";

// $hoge2 = new Hoge();
// $hoge2->name = "藤村";

// print($hoge1->name);
// print($hoge2->name);

// #クラス継承
// class Human
// {
//   function __construct(){
//     $this->name = null;
//     $this->address = null;
//   }
//   function show(){
//     print($this->name."\n");
//     print($this->address."\n");
//   }
// }

// #class <新しいクラス名> extends <継承するクラス名>{}で継承
// class Actor extends Human{}
// $actor = new Actor();
// $actor->name = "大泉";
// $actor->address = "北海道";
// $actor->show();

#実習1
class Hoge
{
  function hello(){
    print("Hello PHP!");
  }
}
$hoge = new Hoge();
$hoge->hello();

?>
