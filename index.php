<?php declare (strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello</h1>
    <?php
    echo '<br>';

  /*  $x= [
    #'name' => 'John Doe',
   # 'age' =>30,
    'roll'=>100
    
    ];
    ?>*/ #eigulo hlo phpte c,nt korar style
        
echo "My first PHP script!";
$x ='10'; #10  int num but amra cotation er moddhe rakci jonno ata string hoya gacha.
echo '<br>';
var_dump($x);
echo '<br>';
var_dump((int)$x); #akhana amra type casting koreci
echo '<br>';


$x =10;
$y = (string) $x;
echo $y;
echo '<br>';

$y ='Hello';
var_dump($y);
echo '<br>';
echo strlen($y);
echo '<br>';

$z = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi magnam doloribus eaque tempore.';
echo '<br>';
     echo str_word_count($z); #ata word count korar jonno use hoy
     echo '<br>';
     echo strpos($z,'dolor'); #kono kcur position ber korte chaile ata use hbe
     echo '<br>';


     $x = "Hello World!";

echo strtoupper($x);
echo '<br>';
echo strtolower($x);
echo '<br>';
echo str_replace("World", "Dolly", $x); #replace kore jekono word
echo '<br>';
echo strrev($x); #reverse korte
echo '<br>';
echo trim($x); #removes any whitespace from the beginning or the end
echo '<br>';
$x = "Hello";
$y = "prity";
$z = $x . $y; #concatination
echo '<br>';
echo $z;
$x = "hi";
$y = "bd";
$z = "$x $y";
echo '<br>';
echo $z;
$x = "Hi, how are you?";
echo '<br>';
echo substr($x, 5, -3);

$d = "hello bangladesh";
$z= substr($d, 5,2);
echo '<br>';
echo  $z;
echo '<br>';
echo ucfirst($x);



$y = 'hello_world test_10';
$arr = explode(' ',$y); #expode  diye string thaka array te convert kora jay
$arrF = explode('_', $arr[1]);
echo '<br>';
print_r($arrF);
echo '<br>';

print_r($arr);

$d = "hello bangladesh";
$z= substr($d, 5,5);
echo '<br>';

echo  $z;
$e = "hello bangladesh";
$h= substr($d, -2,5);
echo '<br>';
echo  $h;

##operators // tarnary operator //single line condition cheack
$f= 10;
echo '<br>';
echo $f == 10 ? "eleven" :"not Ten";
echo '<br>';
 #null coleting
 echo $f ?? 2122;
 echo '<br>';
 $arr =['a','b','c','d','e','f','g','h','i','j','k','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
 
 foreach ($arr as $key=>$kicu) #array as value
 {
  echo ++$key.'.'. $kicu;
  echo '<br>';
 }
 #function...............
 function test($x){
  echo $x;
 }
 test(7);

 echo'<br>';
 
 # defaulte function...............
 function testp ($p =0){
  echo $p;
 }
 testp();
 echo'<br>';
 #return function...........
 function rtest ($r){
  return $r;
 }
 echo rtest(50);
 echo'<br>';
 #passing arguments by referance...
 function passtest(&$p){
$value = $p;
return $value;
 }
 $num =80;
 echo passtest($num);
 
 echo'<br>';


 #variadic function (unlimited poriman value pass kora jay)
 #jkn amra akadhik value assign kori tkn seta array akare jay
function sum(...$v)
{
  $add = 0;
 foreach ($v as $value){
  $add += $value;
 }
 return $add;
 
}

echo sum(5,6,9,9,5,40,45);

echo'<br>';
#strict type // type hinting kora
function sub (int $n ,int $m)
{
  return $n - $m;
}
echo sub(10,5);
echo'<br>';
function mul (int $n ,int $m) :string
{
  $result =$n * $m;
  return (string) $result;
}
echo mul(10,5);
echo'<br>';
var_dump(mul(10,5)) ;
echo'<br>';

#Array......
//multidimentional array....//nested akare thaka mane array er vitore array
$multidimentional =[
  [1,2,3,4,5],
  [6,7,8,9,10],
  [11,12,13,14,15],
  [16,17,18,19,20],
  [21,22,23,24,25],
];
print_r($multidimentional[2][3]);
echo'<br>';
print_r($multidimentional[2]);
echo'<br>';

//associative array......//key value pair akare thake
$var =[
  'a'=>1,
  'b'=>2,
'c'=>3,
'd'=>4,
'e'=>5,
'f'=>6,
'g'=>7,
'h'=>8,


];
if (array_key_exists ('a',$var)){
  echo $var['a'];
  echo'<br>';
print_r(array_keys($var));
 echo'<br>';
 print_r(array_values($var));

}


 ?>
</body>

</html>