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
<h2>MEMO</h2>
<pre>
<?php 
    require('dbconect.php');

    $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');

    $statement->execute(array($_POST['memo'], $_POST['id']));
    // $statement->bindParam(1, $_POST['memo']); これでも同じ
    echo 'メモの編集が登録されました';
?>
</pre>
<a href="index.php">TOPに戻る</a>
</main>
</body>
</html>