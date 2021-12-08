<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一廠商的編輯表單</title>
</head>
<body>
<h1>顯示單一廠商的編輯表單</h1>
<form method="post" action="/vendors/{{$vendor->id}}">
    @method("put")
    @csrf
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $vendor->id }}</td>
        </tr>
        <tr>
            <td>廠商</td>
            <td><input type="text" name="vendor" value="{{ $vendor->vendor}}"/></td>
        </tr>
        <tr>
            <td>客服電話</td>
            <td><input type="text" name="phone_number" value="{{ $vendor->phone_number }}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
