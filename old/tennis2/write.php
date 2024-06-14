<?php
  
  // include 'includes/login.php';

  // var_dump($_POST);

  $name = $_POST['name'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $pass = $_POST['pass'];
  $token = $_POST['token']; // CSRF対策

  // CSRF対策：トークンが正しいか?
  if ($token != hash('sha256', session_id())) {
    header('Location: bbs.php');
    exit();
  }



  if ($name == '' || $body == '') {
    header("Location: bbs.php");
    exit();
  }

  if (!preg_match("/^[0-9]{4}$/", $pass)) {
    header("Location: bbs.php");
    exit();
  }

  // 名前をクッキーにセット
  setcookie('name', $name, time() + 60*60*24*30);

  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';

  try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $sql = "INSERT INTO bbs (name, title, body, date, pass)"
            . " VALUES (:name, :title, :body, now(), :pass)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);

    $stmt->execute();

    header('Location: bbs.php');
    exit();
  } catch (PDOException $e) {
    exit('エラー：' . $e->getMessage());
  }