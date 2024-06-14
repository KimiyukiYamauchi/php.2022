<?php
include 'includes/login.php';

$msg = null;
$alert = null;
if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
  $old_name = $_FILES['image']['tmp_name'];
  $new_name = date("YmdHis");
  $new_name .= mt_rand();

  $new_width = 200; // サムネイルの幅

  // 元画像の縦横サイズを取得
  list ($width, $height) = getimagesize($_FILES['image']['tmp_name']);

  // 画像のサイズ比率を計算
  $rate = $new_width / $width;    // 比率
  $new_height = $rate * $height;  // 比率から計算したサムネイルの高さ

  // サムネイルサイズでキャンパスを作成する
  $canvas = imagecreatetruecolor($new_width, $new_height);

  // アップした画像の拡張子によって新ファイル名と画像の読み込み方を変える
  switch (exif_imagetype($_FILES['image']['tmp_name'])) {
    // JPEG
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
        imagecopyresampled($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($canvas, 'images/new_image.jpg');
        break;

    // GIF
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['image']['tmp_name']);
        imagecopyresampled($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagegif($canvas, 'images/new_image.gif');
        break;

    // PNG
    case IMAGETYPE_PNG:
        $image = imagecreatefromgif($_FILES['image']['tmp_name']);
        imagecopyresampled($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagepng($canvas, 'images/new_image.png');
        break;

    // 画像以外のファイルのとき
    default:
      header('Location: upload2.php');
      exit();
  }

  imagedestroy($image);
  imagedestroy($canvas);

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>サークルサイト</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

  <?php include('navbar.php'); ?>

  <main role="main" class="container" style="padding: 60px 15px 0">
    <div>
      <h1>画像アップロード</h1>
      <?php
      if ($msg) {
        echo '<div class="alert alert-' . $alert .' "roll="alert">' . $msg . '</div>';
      }
      ?>
      <form action="upload2.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>アップロードファイル</label>
          <input type="file" name="image" class="form-control-file">
        </div>
        <input type="submit" value="アップロードする" class="btn btn-primary">
      </form>
    </div>

  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="annonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>