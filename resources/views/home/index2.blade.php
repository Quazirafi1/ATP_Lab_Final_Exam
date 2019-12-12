<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Scout!</h1>
    <h2>ID: {{session('id')}}</h2>
    <a href="{{route('product.add')}}">Create And Request New Posts</a> |
    <a href="{{route('product.index')}}">Post List</a> |
    <a href="{{route('product.edit2', session('id'))}}">Update Credentials</a> |
    <a href="/logout">logout</a>

	<table>
        <tr>
        <td></td>
        <td></td>
        </tr>
	</table>

</body>
</html>
