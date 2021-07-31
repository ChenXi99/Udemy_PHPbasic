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
date_default_timezone_set('Asia/Tokyo'); //MAMP設定を変えるか、これで指定してもOK
print('現在は'.date("l")); // . は、文字列連結！
print(date("G時i分s秒") .'です！');
?>

</pre>
</main>
</body>    
</html>