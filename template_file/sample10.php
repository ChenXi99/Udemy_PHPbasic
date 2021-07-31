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
echo (date('G')); //時間表示

if (date('G') > 9) {
    echo ('受付時間外！');
} else {
    echo ('ようこそ');
}

$x = 'aiueo';
if ($x !== '') {
    echo ('文字があります');
}

$x = 0; // 0=false, 0以外＝true
if (!$x) { // if (!$x === 0) と同じ
    echo ('xは0です');
}

?>

</pre>
</main>
</body>    
</html>