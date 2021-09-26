<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
    </tr>
    <?php foreach($x as $y => $z): ?>
    <tr>
      <td><a href="/people/regist?id=<?php echo $z->id; ?>"><?php echo h($z->id); ?></a></td>
      <td><?php echo h($z->name); ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
