<?php

namespace MyApp;

class Todo {
  private $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
    Token::create();
  }

  public function processPost() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      Token::validate();
      $action = filter_input(INPUT_GET, 'action');
      
      switch ($action) {
        case 'add':
          $id = $this->add();
          header('Content-type: application/json');
          echo json_encode(['id' => $id]);
          break;
        case 'toggle':
          $isDone = $this->toggle();
          header('Content-type: application/json');
          echo json_encode(['is_done' => $isDone]);
          break;
        case 'delete':
          $this->delete();
          break;
        case 'purge':
          $this->purge();
          break;
        default:
          exit;
          
      }

      // header('Location: ' . SITE_URL);
      exit;
    }
  }

  private function toggle() {
    $id = filter_input(INPUT_POST, 'id');
    if (empty($id)) {
      return;
    }

    $stmt = $this->pdo->prepare('SELECT * FROM todos WHERE id = :id');
    $stmt->bindValue('id', $id, \PDO::PARAM_INT);
    $stmt->execute();
    $todo = $stmt->fetch();
    if (empty($todo)) {
      header('HTTP', true, 404); // HTTP Status Code
      exit;
    }

    $sql = 'update todos set is_done = not is_done '
            . 'WHERE id = :id';
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue('id', $id, \PDO::PARAM_INT);
    $stmt->execute();

    return (boolean) !$todo->is_done;
  }

  private function add() {
    $title = trim(filter_input(INPUT_POST, 'title'));
    if ($title === '') {
      return;
    }

    $stmt = $this->pdo->prepare('insert into todos (title) values (:title)');
    $stmt->bindValue('title', $title, \PDO::PARAM_STR);
    $stmt->execute();
    return (int)$this->pdo->lastInsertId();

  }

  private function delete() {
    $id = filter_input(INPUT_POST, 'id');
    if (empty($id)) {
      return;
    }

    $stmt = $this->pdo->prepare('delete from todos where id = :id');
    $stmt->bindValue('id', $id, \PDO::PARAM_INT);
    $stmt->execute();
  }
  
  private function purge() {
    $this->pdo->query('DELETE FROM todos WHERE is_done = 1');
    
  }

  public function getAll() {
    $stmt = $this->pdo->query('SELECT * FROM todos ORDER BY id DESC');
    $todos = $stmt->fetchAll();
    return $todos;
  }
}