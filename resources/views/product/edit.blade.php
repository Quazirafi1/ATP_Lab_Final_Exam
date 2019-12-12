<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>Edit User</h1>
<a href="{{route('product.index')}}">Back</a> |
<a href="/logout">logout</a>

<form method="post">
    <table border="1">

        <tr>
            <td>TITLE (Name Of The Place)</td>
            <td><input type="text" name="title" value="{{$std['title']}}"></td>
            <td>{{$errors->first('title')}}</td>
        </tr>
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="country" value="{{$std['country']}}"></td>
            <td>{{$errors->first('country')}}</td>
        </tr>
        <tr>
            <td>HISTORY</td>
            <td>
                <textarea name="history" rows="8" cols="20">{{$std['history']}}
                </textarea>
            </td>
            <td>{{$errors->first('history')}}</td>
        </tr>
        <tr>
            <td>ESTIMATED COST</td>
            <td><input type="text" name="price" value="{{$std['price']}}"></td>
            <td>{{$errors->first('price')}}</td>
        </tr>
        <tr>
            <td>MEDIUM</td>
            <td><input type="text" name="medium" value="{{$std['medium']}}"></td>
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
