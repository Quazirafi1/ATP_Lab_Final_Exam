<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>Welcome User!</h1>
<h2>ID: {{session('id')}}</h2>
<a href="{{route('general.all')}}">View All Post In Details</a> |
<a href="/logout">logout</a>


</body>
</html>
