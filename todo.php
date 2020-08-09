<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TodoList</title>
</head>
<body>
  <?php 
  print '<div style="background-color: pink;">';
  print '<p>動作確認</p>';
  print_r($_POST);
  print '</div>';
  ?>

  <div>
    <h1>TodoList</h1>
    <div>
      <h2>登録フォーム</h2>
        <form action="todo.php" method="POST">
          <input type="text" name="todo_title">
          <button type="submit" name="submit_add_todo">追加</button>
        </form>
    </div>
    <div>
    <h2>Todo一覧</h2>
      <ul>
        <li>料理</li>
        <?php ?>
        <li><?php ?></li>
        <?php ?>
      </ul>
    </div>
  </div>
</body>
</html>