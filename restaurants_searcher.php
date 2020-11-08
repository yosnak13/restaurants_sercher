<?php
function write_data_to_csv(){
  $restaurants = [];
  $response = "hugahuga";

  if(isset($response["error"])){
    return print("エラーが発生しました!");
  }
  if(isset($response["rest"]))[
    foreach($response["rest"] as &$i){
      $restaurants_name = $i["name"];
      $restaurants[] = $restaurants_name;
    }
  ]
  return print_r($restaurants);

}
write_data_to_csv()
?>
