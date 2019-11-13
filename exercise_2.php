<?
/* counting words

Write a function 'countWords($str)' that takes any string of characters
and finds the number of times each word occurs. You should ignorethe distinction
between capital and lowercase letters, and do not have to worry about dealing
with characters that are not letters.

Hint: Create an associative array mapping word keys to the number of times they occur.
You will need to look at PHP's string functions to split a sentence into words.

Hint 2: The print_r($array_name) function is useful for examining the contents
of an array.*/

$sentence = "Here is a quick cheat sheet of the main PHP regex functions.";

function countWords($str) {
  $str_new = strtolower($str);
  $words = explode(" ", $str_new);
  //words: [0] => hello [1] => world!
  print_r($words);


  $words_len = count($words);

 for($i = 0; $i < $words_len; $i++) {
    $counted[] = substr_count($str_new, $words[$i]);

  }
  print_r($counted);
//problem: words that occur in other words (i.e. "is")
//problem: characters like . , ;
//words that occure more times: stristr

//statt dessen foreach verwenden
// https://www.php.net/manual/en/function.array-combine.php
  $cw = array_combine($counted, $words);

  print_r($cw);

}
countWords($sentence);
