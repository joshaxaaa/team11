<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有廠商資料</title>
</head>
<body>
<h1>顯示所有廠商資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠商</th>
        <th>客服電話</th>

    </tr>
    @foreach($vendors as $vendor)
        <tr>
            <td>{{$vendor->id}}</td>
            <td>{{$vendor->vendor}}</td>
            <td>{{$vendor->phone_number}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
