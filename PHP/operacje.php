<?php
  //wersja PHP
  echo PHP_VERSION,'<br>';
  // echo phpinfo();
  // interpolacja,
  echo 'a', 'b', 'c'; // show a show b show c
  // concatenacja
  echo 'a'. 'b'. 'c'; // add a+b+c show abc
  echo '<br>';

  //operacje na zmiennych

  $pow = 2**10;
  echo $pow; //1024

  // operatory bitowe
  // and &, or |, not ~, xor ^, <<, >>

  $bin = 0b1010;
  echo "<br>$bin<br>";

  $bin = $bin << 2; //101000
  echo $bin; //40

  $bin = $bin >> 3; //101
  echo "<br>$bin<br>"; //5

  //porównanie
  $x = 1;
  $y = 1.0;

  if($x == $y){
    echo '$x jest równa $y';
  }
  else{echo '$x nie jest równa $y';}

  if($x === $y){
    echo '$x jest identyczna jak $y';
  }
  else{echo '$x nie jest identyczna $y';}

  echo "<br>";

  echo gettype($x); // intiger
  echo '<br>';
  echo gettype($y); // double 


  $x=10;
  $y=100;
  echo $x <=> $y;
  echo "<hr>";

  $x=1;
  $x=$x++;
  echo $x; //1
  $x=++$x; 
  echo $x; //2
  $y=$x++;
  echo $x; //3
  echo $y; //2
  $y=++$x*2-1;
  echo $x; //4
  echo $y; //7

  // operatory zmiennych - rzutowanie
  $test = '12abc34';
  $test = 0;
  $test = 20;

  echo '<br> Typ danych $test',gettype($test1);
  $test1=(int)$test1;
  echo $test1;
  echo '<br> Typ danych $test', gettype($test1);

  echo '<br> Typ danych $test2',gettype($test2);
  $test2=(bool)$test2;
  echo $test2; //false
  echo '<br> Typ danych $test2', gettype($test2);

  echo '<br> Typ danych $test3',gettype($test3);
  $test3=(float)$test3;
  echo $test3;
  echo '<br> Typ danych $test3', gettype($test3);

  //rozmiar typu intiger
  echo PHP_INT_SIZE, '<hr>'; //8

  //kontrola typu zmiennej
  //is_int() is_float() is_string() is_bool() is_null()

  $x=1;
  $y=null;
  echo is_null($y);
  echo is_int($x);
  echo is_bool($x);
  echo is_string($x) '<br>';

  $w;
  //operator ignorowania błędów - @
  echo @gettype($w);
?>
