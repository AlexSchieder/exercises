<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?


function countWords($str) {
  $str_1 = strtolower($str);
  $str_new = preg_replace('/[.,;:\-!]/', '', $str_1);
  $words = explode(" ", $str_new);
  //print_r($words);

  return array_count_values($words);
}


  $array = countWords($_GET['text']);

  if(isset($_GET['submit'])) {
    echo $_GET['text'];
    countWords($_GET['text']);
    //print_r(countWords($_GET['text']));
    //$array = countWords($_GET['text']);
    //print_r($array);

  }



?>
  <form action="<?$_SERVER['PHP_SELF']?>" method="get">
    <input type="text" name="text" value="">
    <input type="submit" name="submit" value="submit">
  </form>
  <table>
    <?
    foreach ($array as $key => $value) {
      echo "<tr><td>". $key . "</td><td>" . $value . "</td></tr>";
    }
    ?>
  </table>
</body>
</html>
