<?php

  //this is string
  echo 'hello, people';    //semicolon is important (;)

?>

<!DOCTYPE html>
<html>
    <head>
        <title>my first PHP file</title>
    </head>
    <body>
        <h1><?php echo 'hello, people'; ?></h1> <!--understanding the text before sending it to the browser-->
        <h1>hello, people</h1> <!--browser displays the text directly-->
    </body>
</html>





<?php //variables & constants

  define('NAME', 'Mira');    //NAME = constant name, 'Mira' = value

  $name = 'Mira';    //$name = variable name, 'Mira' = value
  //$name = "Addin";  // $ tells PHP that name is a variable.
  $age = 20;

  //Constant = creates a constant that normally cannot be changed
  //Variable = stores a value that can be changed
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

        <h1>User Profile Page</h1>

        <div><?php echo NAME; ?></div> <!--constant-->
        <div><?php echo $age; ?></div> <!--variable-->

    </body>
</html>





<?php //Strings

  $stringOne = 'my email is ';         // . = concatenation operator
  $stringTwo = 'mira123@gmail.com.my';

  //echo $stringOne . $stringTwo;      it joins strings together

  $name = 'mira';

  echo 'Hey, my name is ' . $name;

  differences "" and ''               //"Hey my name is $name" = Hey my name is mira
  echo "Hey my name is $name";        //'Hey my name is $name' = Hey my name is $name

  echo "the ninja screamed \"whaaaa\"";  //escaping a character
  echo 'the ninja screamed \"whaaaa\"';  //This quotation mark is part of the text, not the end of string

  echo $name [1]; // = i  m i r a
                       // 0 1 2 3
  echo strlen($name);                 // = string length. (4)
  echo strtoupper($name);             // = changing to uppercase
  echo strtolower($name);             // = changing to lowercase
  echo str_replace('m', 'w', $name);  // = wira (m to w)

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        
    </body>
</html>





<?php //Numbers

  $radius = 25;     //creating number variables
  $pi = 3.14;

  // basic operators - *, /, +, -, **

  echo $pi * $radius^2;     //calculate radius

  // order of operation ( B I D M A S)

  echo 2 * (4 + 9) / 3;

  // increment & decrement operators

   echo $radius++;     //incrase value by 1
   echo $radius;

   // shorthand operators

   $age = 20;

   // $age = $age + 10
   $age += 10; 
   $age *= 2;
   echo $age;

   // number functions

   echo floor($pi);  //rounds down
   echo ceil($pi);   //rounds up
   echo pi();        //return value

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        
    </body>
</html>





<?php  //Arrays

  // indexed arrays -> use numbers as positions/indexes.

  $peopleOne = ['shaun', 'crystal', 'ryu'];  //automatically gives them indexes
  echo $peopleOne[1];   // = crystal         //shaun = 0, crystal = 1, ryu = 2

  $peopleTwo = array('key', 'chun-li');
  echo $peopleTwo[1];   // = chun-li

  $ages = [20, 30, 40, 50];
  print_r($ages);       //displaying the contents of an array

  $ages[1] = 25;        //Changing an array value
  print_r($ages);

  $ages[] = 60;         //[] Add this value to the end of the array.
  print_r($ages);       // = 20, 25, 40, 50, 60

  array_push($ages, 70); //also add a value
  print_r($ages);        //20, 25, 40, 50, 60, 70

  echo count($ages);  // = 6 (how many items are in the array)

  $peopleThree = array_merge($peopleOne, $peopleTwo);  //combines two arrays into one.
  print_r($peopleThree);


  // associative arrays (key & value pairs) -> use names/keys instead of numbers.

  $ninjasOne = ['shaun'=>'black', 'mira'=>'orange', 'luigi'=>'brown'];   // key => value
  echo $ninjasOne['mira'];
  print_r($ninjasOne);   // = orange

  $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
  print_r($ninjasTwo)

  $ninjasTwo['peach'] = 'pink';    //Changing a value
  print_r($ninjasTwo);             //'peach' => 'yellow' to 'peach' => 'pink'

  echo count($ninjasOne);

  $ninjasThree = array_merge($ninjasOne, $ninjasTwo);   //combines both associative arrays into one.
  print_r($ninjasThree);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        
    </body>
</html>





<?php //Multidimensional Arrays

  // mul-dimensional arrays

  $blogs = [
    ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
    ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
    ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
  ];     //$blogs is an indexed array, but each item inside it is an associative array.

  print_r($blogs[1][1]);      // [1] get the second blog  [1] = toad
  echo $blogs[2]['author'];   // [2] get the third blog   [author] = link
  echo count($blogs);         // = 3

  $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];  
             //Adding another blog

  print_r($blogs);
  $popped = array_pop($blogs);   //array_pop() removes the last item from an array = blog 4
  print_r($popped);              //shows the blog that was removed.

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        
    </body>
</html>





<?php //Loops

  $ninjas = ['shaun', 'ryu', 'yoshi'];

  for($i = 0; $i < count($ninjas); $i++){      //$i = 0, start counting at 0  
    echo $ninjas[$i] . '<br />';               //$i < count($ninjas), keep looping while $i is smaller than the number of items = 3
  }

  foreach($ninjas as $ninja){       //for each item in $ninjas, temporarily call that item $ninja
    echo $ninja . '<br />';
  }

  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lghtning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
  ];

  foreach($products as $product){                        //each time the loop runs, $product becomes one of the arrays.
    echo $product['name'] . ' - ' . $product['price'];   // shiny star - 20
    echo '<br />';
  }

  $i = 0

  while($i < count($products)){    //keep running this code while this condition is true
    echo $products[$i]['name'];
    echo '<br />';
    $i++;                         //increases $i so the loop can eventually stop
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product){ ?>

              <h3><?php echo $product['name']; ?></h3>    <!--<h3>shiny star</h3>-->
              <p>£ <?php echo $product['price']; ?></p>   <!--<h3>£ 20</h3>-->

            <?php } ?>

        </ul>
    </body>
</html>





<?php //Booleans & Comparisons

  // comparisons booleans (true or false)

  echo true; "1" //outputs 1
  echo false; "" //outputs nothing

  // numbers
  echo 5 < 10;     //1
  echo 5 > 10;     //nothing
  echo 5 == 10;    //nothing
  echo 10 == 10;   //1
  echo 5 != 10;    //1
  echo 5 <= 5;     //1
  echo 5 >= 5;     //1

  // strings  (compares strings based on their character/alphabetically order)
  echo 'shaun' < 'yoshi';   //1
  echo 'shaun' > 'yoshi';   //nothing
  echo 'shaun' > 'shaun';   //nothing
  echo 'mario' == 'mario';  //1
  echo 'mario' == 'Mario';  //nothing

  // loose vs strict equal comparison
  echo 5 == '5';   //1
  echo 5 === '5';  //nothing (=== checks both value AND data type.) 5 = number, '5' = string
  echo 5 === 5;    //1

  echo true == "1";  //1
  echo false == "";  //1

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        
    </body>
</html>