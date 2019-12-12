<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>User List</h1>
<a href="/homeuser">Back</a> |
<a href="/logout">logout</a>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>LIVE STATUS</td>
        <td>EDIT REQUEST STATUS</td>
        <td>ACTION</td>
    </tr>

    @foreach($users as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->title}}</td>
            <td>
                @if($s->status==0)
                    Requested
                @else
                    Live
                @endif
            </td>
            <td>
                @if($s->request==0)
                    No Request pending
                @else
                    Live
                @endif
            </td>
            <td>
                <a href="{{route('product.edit', $s->id)}}">Edit</a> |
                <a href="{{route('product.delete', $s->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>
