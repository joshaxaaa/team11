@extends('app')

@section('title', '所有電腦資料')

@section('laptops_contents')
<th>
    <a href="{{route('laptops.highprice')}}">
        高價電腦
    </a>
</th>&ensp;
<th>
    <a href="{{route('laptops.create')}}">
        新增筆電
    </a>
</th>
<h1>顯示所有筆電資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>筆電</th>
        <th>廠商</th>
        <th>尺寸</th>
        <th>價格</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($laptops as $laptop)
        <tr>
            <td>{{$laptop->id}}</td>
            <td>{{$laptop->name}}</td>
            <td>{{$laptop->vendor->vendor}}</td>
            <td>{{$laptop->size}}</td>
            <td>{{$laptop->price}}</td>
            <td>
                <a href="laptops/{{$laptop->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="laptops/{{$laptop->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="laptops/{{$laptop->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
