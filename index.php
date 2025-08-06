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
 
 
 ?>
</body>

</html>