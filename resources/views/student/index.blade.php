<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
            <td>USERNAME</td>
            <td>TYPE</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
			<td>{{$s->username}}</td>
            <td>
                @if($s->type == '2')
                    Scout
                @elseif ($s->type == '3')
                    General User
                @else
                    Admin
                @endif
            </td>
            <td>
				<a href="{{route('student.edit', $s->userId)}}">Edit</a> |
                @if($s->userId != '1234')
				<a href="{{route('student.delete', $s->userId)}}">Delete</a> |
                @endif
				<a href="{{route('student.details', $s->userId)}}">Details</a>
			</td>

		</tr>
	@endforeach

	</table>

</body>
</html>
