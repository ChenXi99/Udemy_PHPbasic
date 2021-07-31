<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->

<?php
echo time(); //1970年１月１日起算！PCが計算しやすいというだけ
echo (time() + 60 * 60 * 24); 
echo(date('n/j(D)', time())); //月/日を、桁に応じて出力。D：曜日を３文字
echo(date('n/j(D)', time() + 60 * 60 * 24)); 

for ($i=1; $i<=365; $i++) {
    $date = strtotime('+' . $i . 'days');
    echo (date('n/j(D)', $date));
    echo "\n";
}

// forに対して、{}の代わりに、終わりにendfor; も同じ。

?>

</pre>
</main>
</body>    
</html>