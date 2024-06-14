<?php
session_start();    // セッション開始

if (isset($_SESSION['id'])) {
  // セッションにユーザIDがある = ログインしている
  // ログイン済みならトップページへ遷移する
  header('Location: index.php');
} else if (isset($_POST['name']) && isset($_POST['password'])) {
  // ログインしていないがユーザ名とパスワードが送信されたとき
  // DBに接続
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';

  try {
    $db = new PDO($dsn, $user, $password);
    // var_dump($db);
    // exit;
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアードステートメントを作成
    $sql = "SELECT users.id, users.name AS login_name, profiles.name AS name " .
            "FROM users, profiles " .
            "WHERE users.id = profiles.id AND users.name = :name AND users.password = :pass";
    $stmt = $db->prepare($sql);

    // パラメータ割り当て
    $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindParam(':pass', hash("sha256", $_POST['password']), PDO::PARAM_STR);

    // クエリ実行
    $stmt->execute();

    if ($row = $stmt->fetch()) {
      // ユーザが存在していたら、セッションにユーザIDをセット
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
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
  <title>サークルサイト</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style type="text/css">
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

  <main role="main" class="container" style="padding: 60px 15px 0">
    <div>

    <form action="login.php" method="post">
      <h1>サークルサイト</h1>
      <label class="sr-only">ユーザ名</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="ユーザ名">
      <label class="sr-only">パスワード</label>
      <input type="text" name="password" id="password" class="form-control" placeholder="パスワード">
      <input type="submit" value="ログイン" class="btn btn-primary btn-block">

    </form>
    </div>

  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="annonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>