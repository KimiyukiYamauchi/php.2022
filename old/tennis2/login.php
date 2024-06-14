<?php
session_start();  // セッション開始

if (isset($_SESSION['id'])) {
  // セッションにユーザIDがある=ログインしている
  // ログイン済みならトップページに遷移する
  header('Location: index.php');
} else if (isset($_POST['name']) && isset($_POST['password'])) {
  // ログインしていないがユーザ名とパスワードが送信されたとき
  // DBに接続
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';

  try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアードステートメントを作成
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name AND password=:pass");

    // パラメータ割り当て
    $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
    $hashpass = hash("sha256", $_POST['password']);
    $stmt->bindParam(':pass', $hashpass, PDO::PARAM_STR);
    // クエリ実行
    $stmt->execute();

    if ($row = $stmt->fetch()) {
      // ユーザが存在していたら、セッションにユーザIDをセット
      $_SESSION['id'] = $row['id'];
      header('Location: index.php');
      exit();
    } else {
      // 1レコードも取得できなかったとき
      // ユーザ名・パスワードが間違っている可能性あり
      // もう一度ログインフォームを表示
      header('Location: login.php');
      exit();
    }
  } catch (PDOException $e) {
    exit('エラー：' . $e->getMessage());
  }
}
// ログインしていない場合は以降のログインフォームを表示する
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>サークルサイト</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    form {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      text-align: center;
    }
    #name {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    #password {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>
<body>
  <?php include('navbar.php'); ?>

  <main role="main" class="container" style="padding: 60px 15px 0">

    <div>

    <form action="login.php" method="post">
      <h1>サークルサイト</h1>
      <label class="sr-only">ユーザ名</label>
      <input type="text" name="name" id="name" placeholder="ユーザ名" class="form-control">
      <label class="sr-only">パスワード</label>
      <input type="password" name="password" id="password" placeholder="パスワード" class="form-control">
      <input type="submit" value="ログイン" class="btn btn-primary btn-block">
    </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>