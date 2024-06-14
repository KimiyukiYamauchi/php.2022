<?php
  include 'includes/login.php';

  function getPage() : int {
    $page = 1;
    if (isset($_GET['page']) && $_GET['page'] > 1) {
      $page = intval($_GET['page']);
    }
    return $page;
  }

  var_dump($_COOKIE);

  if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
  } else {
    $name = "";
  }

  $num = 10;

  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';

  // $page = 1;
  // if (isset($_GET['page']) && $_GET['page'] > 1) {
  //   $page = intval($_GET['page']);
  // }

  $page = getPage();

  try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $stmt = $db->prepare("SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num");
    $page = ($page-1) * $num;
    $stmt->bindParam(':page', $page, PDO::PARAM_INT);
    $stmt->bindParam(':num', $num, PDO::PARAM_INT);
    $stmt->execute();
  } catch (PDOException $e) {
    exit("エラー：" . $e->getMessage());
  }
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
      <h1>掲示板</h1>
      <form action="write.php" method="post">
        <div class="form-group">
          <label>タイトル</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>名前</label>
          <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
          <textarea name="body" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>削除パスワード(数字4桁)</label>
          <input type="text" name="pass" class="form-control">
        </div>
        <input type="submit" value="書き込む" class="btn btn-primary">
        <input type="hidden" name="token" value="<?php echo hash("sha256", session_id()) ?>">
      </form>
      
      <hr>
      
      <?php while($row = $stmt->fetch()): ?>
        <div class="card mb-3">
          <div class="card-header">
            <?php echo $row['title'] ? $row['title'] : '（無題）'; ?>
          </div>
          <div>
            <div class="card-body">
              <div class="card-text">
                <?php echo nl2br(htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8')) ?>
              </div>
            </div>
            <div class="card-footer">
              <form action="delete.php" method="post" class="form-inline">
                <?php echo $row['name'] ?>(<?php echo $row['date'] ?>)
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <input type="text" name="pass" placeholder="削除パスワード" class="form-control">
                <input type="submit" value="削除" class="btn btn-secondary">
                <input type="hidden" name="token" value="<?php echo hash("sha256", session_id()) ?>">
              </form>
            </div>
        </div>
      </div>
      <!-- <hr> -->
<?php endwhile; ?>
<?php
try {
  $stmt = $db->prepare("SELECT COUNT(*) FROM bbs");
  $stmt->execute();
} catch (PDOException $e) {
  exit("エラー：" . $e->getMessage());
}

$comments = $stmt->fetchColumn();
// ページ数を計算
$max_page = ceil($comments / $num);
// ページングの必要性があれば表示
if ($max_page >= 1) {
  echo '<nav><ul class="pagination">';
  $current = getPage();
  for ($i=1; $i<=$max_page; $i++) {
    $tag = '';
    if ($i == $current) {
      $tag = '<li class="page-item active">';
    } else {
      $tag = '<li class="page-item">';
    }
    $tag .= '<a class="page-link" href="bbs.php?page=' 
          . $i . '">' . $i . '</a></li>';

    echo $tag;
  }
  echo '</ul></nav>';
}
?>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>