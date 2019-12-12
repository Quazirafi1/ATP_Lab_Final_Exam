<!DOCTYPE html>
<html>
<head>
    <title>General page</title>
</head>
<body>
<h1>General Page</h1>
<a href="/login">login</a>

<table border="1" width="100">
    <tr width="100">
        <td>ID</td>
        <td>TITLE</td>
    </tr>

    @foreach($users as $s)
        <tr width="100">
            @if($s->status != 0)
                <td>{{$s->id}}</td>
                <td>{{$s->title}}</td>
            @endif
        </tr>
    @endforeach

</table>
</body>
</html>
