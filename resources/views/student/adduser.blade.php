<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add User</h1>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<form method="post">
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username"></td>
            <td>{{$errors->first('username')}}</td>
		</tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name"></td>
            <td>{{$errors->first('name')}}</td>
        </tr>
        <tr>
            <td>CONTACT</td>
            <td>
                <select name="type">
                    <option value="2">Scout</option>
                    <option value="3">General</option>
                </select>
            </td>
            <td>{{$errors->first('type')}}</td>
        </tr>
        <tr>
            <td>CONTACT</td>
            <td><input type="text" name="contact"></td>
            <td>{{$errors->first('contact')}}</td>
        </tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password"></td>
            <td>{{$errors->first('password')}}</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>
