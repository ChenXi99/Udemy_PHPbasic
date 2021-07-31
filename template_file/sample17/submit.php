<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

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
<!-- name属性を渡す -->
Name: <?php echo(htmlspecialchars($_GET['my_name'], ENT_QUOTES)); ?>
<!-- htmlspecialchars: htmlタグで入力された時、認識させないことで、イタズラ防止 -->
<!-- REQUESTは、POST/GETを自動判別。どちらか分からない時のみ使用！ -->

</pre>
</main>
</body>    
</html>