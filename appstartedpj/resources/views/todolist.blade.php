<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--
  <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    -->
  <title>Document</title>
</head>
<body>
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
  <form action="/add" method="post">
    <input type="text" name="task">
    <button type="submit" name="add">追加</button>
    </form>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/change" method="POST">
  <table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($todos as $todo)
  <tr>
    <td>
      {{$todo->created_at}}
    </td>
    <td>
      <input type="text" name="name" value="{{$todo->name}}">
    </td>
    <td>
      <button type="submit" name="update">更新</button>
    </td>
    <td>
      <button type="submit" name="remove">削除</button>
    </td>
  </tr>
  @endforeach
</table>
  
</body>
</html>