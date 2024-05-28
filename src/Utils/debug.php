<?php

declare(strict_types=1);

// instrukcja służąca do włączenia wyświetlania wszystkich błędów, które wystąpią w naszym kodzie
error_reporting(E_ALL);
// druga komenda to włączenie wyświetlenia błędów; te dwie komendy zawsze występują, jeśli chcemy mieć pełny zakres zgłaszanych błędów to musimy ich użyć jednocześnie
ini_set('display_errors', '1');

function dump($data)
{
  echo '<br/><div 
    style="
      display: inline-block;
      padding: 1px 10px;
      margin: 5px;
      border: 1px dashed gray;
      background: lightgray">
  <pre>';
  
  print_r($data);
  echo '</pre>
  </div>
  <br/>';
}
