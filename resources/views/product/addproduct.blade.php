<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>Add User</h1>
<a href="/homeuser">Back</a> |
<a href="/logout">logout</a>

<form method="post">
    <table border="1">
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="title"></td>
            <td>{{$errors->first('title')}}</td>

        </tr>
        <tr>
            <td>ESTIMATED COST</td>
            <td><input type="text" name="price"></td>
            <td>{{$errors->first('price')}}</td>
        </tr>
        <tr>
            <td>MEDIUM</td>
            <td><input type="text" name="medium"></td>
            <td>{{$errors->first('medium')}}</td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="REQUEST"></td>
            <td></td>
        </tr>
    </table>
</form>

</body>
</html>
