<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>Welcome User!</h1>
<h2>ID: {{session('id')}}</h2>
<a href="{{route('general.all')}}">View All Post In Details</a> |
<a href="{{route('general.edit2', session('id'))}}">Update own credentials</a> |

<a href="/logout">logout</a>
<form action="/general/select" method="post">
<table>
    <tr>
        <td>Search Country</td>
        <td><input type="text" name="search"</td>
        <td><input type="submit" name="submit" value="Search"></td>
    </tr>
</table>
</form>
</body>
</html>
