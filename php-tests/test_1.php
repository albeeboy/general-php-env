<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tests</title>
  <style>
    body {
      background-color: #ddd;
      color: #222;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 1rem;
      font-style: normal;
      font-weight: 300;
      margin: 0;
      padding: 0;
    }
    img {
      border: 0;
    }
    h1 {
      font-size: 2.25rem;
      margin: 0 0 1.25rem 0;
    }

    p {
      margin: 0 0 1rem 0;
    }
    .container {
      background-color: #fff;
      box-sizing: border-box;
      display: block;
      margin: 0 auto;
      max-width: 85rem;
      min-height: 45rem;
      padding: 2.5rem;
      position: relative;
      width: 100%;
    }

    .feedback {
      font-size: 1.375rem
    }
  </style>
</head>
<body>
<?php

function solution ($blocks) {
  function check_prev ($arr, $targ_i, $d) {
    $el = $arr[$targ_i];
    $prev = ($targ_i - 1) >= 0 ? $targ_i - 1 : null;
    if ($prev !== null) {
      if ($arr[$prev] >= $el) {
        $d++;
        // echo 'prev: $d = ' . $d . PHP_EOL;
        check_prev($prev, $d);
      } else {
        return $d;
      }
    } else {
      return $d;
    }
  }

  function check_next ($arr, $targ_i, $d) {
    // print_r($arr);
    $el = $arr[$targ_i];
    $next = ($targ_i + 1) < count($arr) ? $targ_i + 1 : null;
    if ($next !== null) {
      if ($arr[$next] >= $el) {
        $d++;
        echo 'next: $d = ' . $d . PHP_EOL;
        check_next($arr, $next, $d);
      } else {
        return $d;
      }
    } else {
      return $d;
    }
  }

  $maxes = array();
  for ($i = 0; $i < count($blocks); $i++) {
    // $d1 = check_prev($i, 0);
    $d2 = check_next($blocks, $i, 0);
    // $dt = $d1 + $d2;
    $dt = $d2;
    $maxes[] = $dt;
  }

  // return max($maxes);
  return $maxes;
}

function returns_test ($input) {
  function nested_return ($a, $b) {
    echo '$a = ' . $a . PHP_EOL;
    echo '$b = ' . $b . PHP_EOL;

    return $a + $b;
  }
  return nested_return($input, $input);
}

$frog_blocks = [1, 3, 9, 6, 5, 8, 4];
?>
<div class="container">
  <section class="feedback"> 
    <h1>Feedback</h1>
    <?php
      $result = solution($frog_blocks);
      echo '<p>' . PHP_EOL;
      print_r($result);
      echo '</p>' . PHP_EOL;
    ?>
  </section>
</div>
</body>
<script>
  function solution(inputString) {
    const len = inputString.length;
    const isEven = len % 2 == 0 ? true : false;
    if (isEven) {
      const strArr = inputString.split('');
      const ti = (len / 2);
      console.log("ti = " + ti);
      const arr = strArr.splice(0, ti);
      console.log("arr: ", arr);
      arr.reverse();
      const pal1 = strArr.toString();
      const pal2 = arr.toString();
      if (pal1 == pal2) {
        return true;
      }
    } else {
      const i = Math.floor(len / 2);
      const oArr = inputString.split('');
      const oArr2 = oArr.splice(0, i);
      oArr.splice(0, 1);
      oArr2.reverse();
      const pal1 =  oArr.toString();
      const pal2 = oArr2.toString();
      if (pal1 == pal2) {
        return true;
      }
    }
    return false;
  }

  const string1 = "aaabaaaa";
  console.log(string1.length);
  console.log(string1.length % 2);
  const isPalindrome = solution(string1);
  console.log(string1 + " is a palindrome: " + isPalindrome);

</script>
</html>
