@extends('app')

@section('title', '所有廠商資料')

@section('laptops_contents')
<th>
    <a href="{{route('vendors.create')}}">
        新增廠商
    </a>
</th>
<h1>顯示所有廠商資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠商</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($vendors as $vendor)
        <tr>
            <td>{{$vendor->id}}</td>
            <td>{{$vendor->vendor}}</td>
            <td>
                <a href="vendors/{{$vendor->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="vendors/{{$vendor->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="vendors/{{$vendor->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
