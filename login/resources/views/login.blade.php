
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Dang nhap</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <input type="text" name="username" placeholder="ten dang nhap">
    </p>

    <p>
        <input type="password" name="password" placeholder="mat khau">
    </p>

    <p>
        <button type="submit">dang nhap</button>
    </p>
</form>
</body>
</html>
