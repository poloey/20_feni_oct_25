<?php 
class Todo {
  public $text;
  public $complete;
  public function __construct($t, $c = false){
    $this->text = $t;
    $this->complete = $c;
  }
}


$todos = [
  new Todo('Go to work', true),
  new Todo('clean the room'),
  new Todo('go to market'),
  new Todo('study for 2 hours', true)
];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>php</title>
</head>
<body>
 
 <ul>
   <?php foreach($todos as $todo) : ?>
      <li><?= $todo->text ?></li>
   <?php endforeach; ?>
 </ul>
</body>
</html>