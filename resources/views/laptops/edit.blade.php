<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一筆電的編輯表單</title>
</head>
<body>
<h1>顯示單一筆電的編輯表單</h1>
<form method="post" action="/laptops/{{$laptop->id}}">
    @method("put")
    @csrf
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $laptop->id }}</td>
        </tr>
        <tr>
            <td>筆電</td>
            <td><input type="text" name="name" value="{{ $laptop->name }}"/></td>
        </tr>
        <tr>
            <td>廠商</td>
            <td><input type="text" name="vid" value="{{ $laptop->vid }}"/></td>
        </tr>
        <tr>
            <td>顯示卡</td>
            <td><input type="text" name="graphics_card" value="{{ $laptop->graphics_card }}"/></td>
        </tr>
        <tr>
            <td>尺寸</td>
            <td><input type="text" name="size" value="{{ $laptop->size }}"/></td>
        </tr>
        <tr>
            <td>中央處理器</td>
            <td><input type="text" name="cpu" value="{{ $laptop->cpu }}"/></td>
        </tr>
        <tr>
            <td>價格</td>
            <td><input type="text" name="price" value="{{ $laptop->price }}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
