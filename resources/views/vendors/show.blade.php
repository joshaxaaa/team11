@extends('app')

@section('title', '廠商完整資料')

@section('laptops_contents')
<h1>顯示單一廠商的詳細資料 </h1>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{ $vendor->id }}</td>
    </tr>
    <tr>
        <td>廠商</td>
        <td>{{ $vendor->vendor}}</td>
    </tr>
    <tr>
        <td>客服電話</td>
        <td>{{ $vendor->phone_number }}</td>
    </tr>
</table>
@endsection
