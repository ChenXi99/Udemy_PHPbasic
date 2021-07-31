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
$i = 1;


// while構文
while ($i <= 365) {
print($i . "\n"); //改行
$i++; //再代入と呼ばれる。$i += 1, $i = $i + 1 と同じ。
// 足し算と引き算のみ適用。
}
// while(繰り返す条件) {繰り返したい処理 更新処理}
// 必ず、最後は条件から外れるように！ $i=$i+1が必要
// = 代入。 === 等しい。 !== 等しくない。 !A Aではない。


// for構文
for ($i=1; $i<=365; $i++) {
    echo($i . "\n");
}
// for (初期化処理; 繰り返す条件; 更新処理)
// forの方が簡単！但し、条件や処理がシンプルな場合。

?>

</pre>
</main>
</body>    
</html>