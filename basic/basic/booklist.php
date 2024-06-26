<?php
$db = new mysqli("localhost", "libuser", "password", "library");

// 上で指定した接続情報が正しいことを確認
if ($db->connect_error) {
  die("接続エラー ({$db->connect_errno}) {$db->connect_error}");
}

$sql = "SELECT * FROM books ORDER BY title";
$result = $db->query($sql);

?>
<html>
  <head>
    <title>入手可能な書籍</title>
  </head>
  <body>
    <table cellspacing="2" celPadding="6" align="center" border="1">
      <tr>
        <td colspan="4">
          <h3 align="center">入手可能な書籍</h3>
        </td>
        <tr>
          <td align="center">タイトル</td>
          <td align="center">発行年</td>
          <td align="center">ISBN</td>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?php echo stripslashes($row['title']); ?></td>
          <td align="center"><?php echo $row['pub_year']; ?></td>
          <td><?php echo $row['ISBN']; ?></td>

        </tr>
        <?php endwhile ?>
      </tr>
    </table>
  </body>
</html>