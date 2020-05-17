<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('login') }}" method="post">
    @csrf
    <div>
        <input type="text" name="username" value="admin" autocomplete="off" placeholder="???">
    </div>
    <div>
        <input type="text" name="password" value="admin888" autocomplete="off" placeholder="??">
    </div>
    <div>
        <input type="submit" value="????">
    </div>
    </form>
</body>
</html>