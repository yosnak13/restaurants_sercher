<?php
class Car
{
  static $class_name = "Car";

  function init(){
    $this->name = "";
  }

  public function show(){
    print($this->name."\n");
  }
}
#Car classのインスタンス作成
$car = new Car();
#Carのインスタンス変数nameに"セダン"という文字列を格納する
$car->name = "セダン";
#Carのメソッドであるshow()を実行する
$car->show();

#Carクラス内にあるクラス変数$class_nameをターミナルに表示する
print(Car::$class_name."\n");

?>
