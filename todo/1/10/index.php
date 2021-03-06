<?php

require_once(__DIR__ . '/conf/config.php');

createToken();

$pdo = getPdoInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = filter_input(INPUT_GET, 'action');

  switch ($action) {
    case 'add':
      addTodo($pdo);
      break;
    case 'toggle':
      toggleTodo($pdo);
      break;
  }

  header('Location: ' . SITE_URL);
  exit;
}

$todos = getTodos($pdo);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Todos</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Todos</h1>

  <form action="" method="post">
    <input type="text" name="title" placeholder="Type new todo.">
    <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
  </form>

  <ul>
  <?php foreach ($todos as $todo): ?>
    <li>
      <form action="" method="post">
        <input type="checkbox" <?= $todo->is_done ? 'checked' : ''; ?>>
        <input type="hidden" name="id" value="<?= h($todo->id); ?>">
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      </form>
      <span class="<?= $todo->is_done ? 'done' : ''; ?>">
        <?= h($todo->title); ?>
      </span>
    </li>
    <?php endforeach; ?>
  </ul>
  <script src="js/main.js"></script>
</body>
</html>