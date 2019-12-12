<!DOCTYPE html>
<html>
<head>
    <title>General page</title>
</head>
<body>
<h1>General Page Search</h1>
<a href="{{route('home.index3')}}">Back</a> |
<a href="/logout">logout</a>
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
