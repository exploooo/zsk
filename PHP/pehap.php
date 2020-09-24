<?php
  # localhost/ZSK/pehape.php
  $name = 'Andrzej';
  $lastName = 'Czartoryski';
  echo 'Imie: $name';

  //zmienne
  $prawda = true;
  $fałsz=false;

  echo $prawda;
  echo "$fałsz<br>"; //nic nie wyswietla

  //intiger
  $bin = 0b1011;
  $oct = 011;
  $dec = 11;
  $hex = 0xA;

  echo "$hex<hr>";

  //heredoc

  $name = 'Janusz';
  $surname = 'Nowak';

  $text = <<<LABEL
  Imię: $name<br>
  Nazwisko: $surname<br>
  <hr>
  LABEL;

  echo $text;

  echo <<<L
  heredoc 2<br>
  Imię: $name<hr>
  L;

  //nowdoc - traktuje wszystko jako tekst

  echo <<<'L'
  nowdoc<br>
  Imię: $name<hr>
  L;

  $city="Poznań";
  echo "Nazwa zmiennej: \$city, wartość: $city";

?>
