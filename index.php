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

  /*  $x= [
    #'name' => 'John Doe',
   # 'age' =>30,
    'roll'=>100
    
    ];
    ?>*/ #eigulo hlo phpte c,nt korar style
        
echo "My first PHP script!";
$x ='10'; #10  int num but amra cotation er moddhe rakci jonno ata string hoya gacha.
var_dump($x);
var_dump((int)$x); #akhana amra type casting koreci


$x =10;
$y = (string) $x;
echo $y;

$y ='Hello';
var_dump($y);
echo strlen($y);

$z = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi magnam doloribus eaque tempore.';
     echo str_word_count($z); #ata word count korar jonno use hoy
     echo strpos($z,'dolor'); #kono kcur position ber korte chaile ata use hbe


     $x = "Hello World!";
echo strtoupper($x);
echo strtolower($x);
echo str_replace("World", "Dolly", $x); #replace kore jekono word
echo strrev($x); #reverse korte
echo trim($x); #removes any whitespace from the beginning or the end
$x = "Hello";
$y = "prity";
$z = $x . $y; #concatination
echo $z;
$x = "hi";
$y = "bd";
$z = "$x $y";
echo $z;
$x = "Hi, how are you?";
echo substr($x, 5, -3);
echo ucfirst($x);
?>
</body>

</html>