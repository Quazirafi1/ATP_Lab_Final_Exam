<!DOCTYPE html>
<html>
<head>
    <title>General page</title>
</head>
<body>
<h1>General Page</h1>
<a href="/login">login</a>

<table border="1">
    <tr>
        <td>Title</td>
        <td>Country</td>
        <td>History</td>
        <td>Medium</td>
        <td>Cost</td>
    </tr>

    @foreach($users as $s)
        <tr>
            <td>{{$s->title}}</td>
            <td>{{$s->country}}</td>
            <td>{{$s->history}}</td>
            <td>{{$s->medium}}</td>
            <td>{{$s->price}}</td>
        </tr>
    @endforeach

</table>
</body>
</html>
