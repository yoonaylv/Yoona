<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
<h3>你好</h3>
<div>
{{ $data['name'] }} --- {{ $data['age'] }} --- {{ $data['html'] }}
<br>
{!! $data['html'] !!}
<br>
{{ date('Y-m-d') }}
<br>
@if($data['age'] <= 10)
    <h3>儿童</h3>
@elseif($data['age']<30)
    <h3>少年</h3>
@else
    <h3>大叔</h3>
@endif
</div>
</body>
</html>
