@extends('app')

@section('title', '顯示電腦完整資料')

@section('laptops_contents')
<h1>顯示單一筆電的詳細資料 </h1>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{ $laptop->id }}</td>
    </tr>
    <tr>
        <td>筆電</td>
        <td>{{ $laptop->name }}</td>
    </tr>
    <tr>
        <td>廠商</td>
        <td>{{ $laptop->vid }}</td>
    </tr>
    <tr>
        <td>顯示卡</td>
        <td>{{ $laptop->graphics_card }}</td>
    </tr>
    <tr>
        <td>尺寸</td>
        <td>{{ $laptop->size }}</td>
    </tr>
    <tr>
        <td>中央處理器</td>
        <td>{{ $laptop->cpu }}</td>
    </tr>
    <tr>
        <td>價格</td>
        <td>{{ $laptop->price }}</td>
    </tr>
    </table>
</body>
</html>
@endsection
