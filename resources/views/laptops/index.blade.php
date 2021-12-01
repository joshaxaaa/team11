<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有筆電資料</title>
</head>
<body>
<h1>顯示所有筆電資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>筆電</th>
        <th>廠商</th>
        <th>顯示卡</th>
        <th>尺寸</th>
        <th>中央處理器</th>
        <th>價格</th>
        <th>操作</th>
    </tr>
    @foreach($laptops as $laptop)
        <tr>
            <td>{{$laptop->id}}</td>
            <td>{{$laptop->name}}</td>
            <td>{{$laptop->vid}}</td>
            <td>{{$laptop->graphics_card}}</td>
            <td>{{$laptop->size}}</td>
            <td>{{$laptop->cpu}}</td>
            <td>{{$laptop->price}}</td>
            <td>
                <a href="laptops/{{$laptop->id}}">
                    詳細
                </a>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>
