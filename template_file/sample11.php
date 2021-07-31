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

3,000円から百円値引きした場合、<?php echo (floor(100 / 3000 * 100)); ?>%引きです。
3,000円から百円値引きした場合、<?php echo (ceil(100 / 3000 * 100)); ?>%引きです。
<?php echo (round(100 / 3000 * 100, 1)); ?>

</pre>
</main>
</body>    
</html>