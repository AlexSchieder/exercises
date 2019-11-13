<?
    /* Charlie will bite your finger exactly 50% of the time.
    First write a function 'isBitten()' that results 'TRUE' with 50% probability,
    and 'FALSE ' otherwise.
    HINT: rand() function*/

    /*function isBitten() {
      if (rand(0,1) == 1) {
        echo "TRUE";
      } else {
        echo "FALSE";
      };
    };

    isBitten();


    /*Below the function, write code to generate a webpage that displays
    "Charlie bit your finger!" or "Charlie did not bite your finger!" using
    the 'isBitten()' function.
    */
function isBitten() {
  if(rand(0,1) == 1) {
    echo "<h1>Charlie bit your finger!</h1>";
  } else {
    echo "<h1>Charlie did not bite your finger!</h1>";
  }
}

echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<title><title>
</head>
<body>"
. isBitten() .
"</body>
</html>";
