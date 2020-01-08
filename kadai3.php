<?PHP
// 課題1
$name = "tsuchida";
if ($name =="tsuchida"){
  echo "私は".$name ."です";
} else{
  echo "あなたの名前ではありません";
}
// 課題2
$goukei = 0;
for($a = 0; $a <=10000; $a++){
  $goukei += $a;
  }
  echo $goukei;
// 課題3

$fruits = array("apple", "orange", "watermeron", "remon", "tomato");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
  }
// 課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
   if($i % 5 == 0){
    echo $i;
   }
}