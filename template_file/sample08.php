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
echo (date('w')); //数字で曜日を知る
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
//$week_name = array('日', '月', '火', '水', '木', '金', '土');と同じ

echo ($week_name[date('w')]); //添え字＝index=目次。指定することで表示可能に。


?>

</pre>
</main>
</body>    
</html>