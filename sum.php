<?php
//課題１
function sum($max) {
    return $max * 2;
}
echo sum(5);
echo "\n";
//課題２
function times($a,$b){
    return $a + $b;
}
echo times(2,5);
echo "\n";
//課題３
function contents($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo contents(array(1, 3, 5 ,7, 9));
echo "\n";
//課題４
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
 echo max_array(array(8, 2, 3, 9, 5));
 echo "\n";
 //課題５
 //strip_tags
 $str ="aaa<br>bbb<br><hr>";
 echo $str;
 echo strip_tags($str);
 echo "\n";
 //array_push
 $array = ["apple", "orange"];
 $arraylenght = array_push($array, "melon", "banana");
 echo $arraylenght."\n";
 print_r($array);
 //array_merge
 $array1 = ["りんご", "バナナ", "みかん", "メロン"];
 $array2 = ["ぶどう", "いちご"];
 $array3 = ["パイナップル", "もも","柿"];
 var_dump(array_merge($array1, $array2, $array3));
 //time.mktime
 $time = mktime(15);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');
 //date
 date_default_timezone_set("Asia/Tokyo");
 echo time()."\n";
 echo date("Y-m-d H:i:s")."\n";