@extends('app')

@section('title', '編輯一筆廠商資料')

@section('laptops_contents')
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
            <td>
                <select name="vendor" required>
                    <option value="ASUS">ASUS</option>
                    <option value="ACER">ACER</option>
                    <option value="MSI">MSI</option>
                    <option value="AORUS">AORUS</option>
                    <option value="XPG">XPG</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="DELL">DELL</option>
                    <option value="HP">HP</option>
                    <option value="Razer">Razer</option>
                    <option value="APPLE">APPLE</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>客服電話</td>
            <td>
                <input type="text" id="phone" name="phone_number" placeholder="0X-xxxxxxxx" pattern="[0-9]{2}-[0-9]{8}"
                       value="{{ $vendor->phone_number }}" required/>
            </td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
@endsection
