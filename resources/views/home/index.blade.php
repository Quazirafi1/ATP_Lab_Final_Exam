<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Admin!</h1>
    <h2>ID: {{session('id')}}</h2>

	<a href="{{route('student.add')}}">Register</a> |
	<a href="{{route('student.index')}}">User List</a> |
    <a href="{{route('post.index')}}">Post Manipulation</a> |
	<a href="/logout">logout</a>

	<table>
        <tr>
        <td></td>
        <td></td>
        </tr>
	</table>

</body>
</html>
