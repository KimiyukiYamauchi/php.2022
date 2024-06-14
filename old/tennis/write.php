<?php
include 'includes/login.php';

// データの受け取り
$name = $_POST['name'];
$title = $_POST['title'];
$body = $_POST['body'];
$pass = $_POST['pass'];

// 必須項目チェック（名前か本文が空でないか？)
if ($name == '' || $body == '') {
  header("Location: bbs.php"); // 空のときはbbs.phpへ移動
  exit();
}

// 必須項目チェック(パスワードは4桁の数字か？)
if (!preg_match("/^[0-9]{4}$/", $pass)) {
  header("Location: bbs.php"); // 空のときはbbs.phpへ移動
  exit();
}

// 名前をクッキーにセット
setcookie('name', $name, time() + 60*60*24*30);

// DBに接続
$dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
$user = 'tennisuser';
$password = 'password'; // tennisuserに設定したパスワード

try {
  // PDOインスタンスの作成
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // プリペアードステートメントを作成
  $sql = "INSERT INTO bbs (name, title, body, date, pass)" .
          "VALUES (:name, :title, :body, now(), :pass)";
  $stmt = $db->prepare($sql);
  // プリペアードステートメントにパラメータを割り当てる
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':title', $title, PDO::PARAM_STR);
  $stmt->bindParam(':body', $body, PDO::PARAM_STR);
  $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
  // クエリの実行
  $stmt->execute();

  // bbs.phpに戻る
  header('Location: bbs.php');
  exit();
} catch (PDOException $e) {
  exit('エラー:' . $e->getMessage());
}