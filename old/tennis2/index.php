<?php
  include 'includes/login.php';
  $fp = fopen("info.txt", "r"); // ファイルの読み込み 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>サークルサイト</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <?php include('navbar.php'); ?>

  <main role="main" class="container" style="padding: 60px 15px 0">

    <div>
      <h1>お知らせ</h1>
<?php
  if ($fp) {
    // ファイルが正しく開けたとき
    $title = fgets($fp);  // ファイルから1行読み込む
    if ($title) {
      // 1行読み込めたときはタイトル文字列をリンクする
      echo '<p><a href="info.php">' . $title . '</a></p>';
    } else {
      // ファイルの中身が空だったとき
      echo '<p>お知らせはありません</p>';
    }
    fclose($fp);
  } else {
    // ファイルが開けなかったとき
    echo '<p>お知らせはありません</p>';
  }
?>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>