<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <div class="container">
        <form method="post" action="/api/role/add">
            @csrf
            <input type="number" name="id">
            <select name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <input type="submit" value="Add">
        </form>
      </div>
      <div class="container">
        <form method="post" action="/api/role/update">
            @csrf
            <input type="number" name="id">
            <select name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <input type="submit" value="Update">
        </form>
      </div>
</body>
</html>