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
                    @if($vendor->vendor=="ASUS")
                        <option value="ASUS" selected>ASUS</option>
                    @else
                        <option value="ASUS">ASUS</option>
                    @endif
                        @if($vendor->vendor=="ACER")
                            <option value="ACER" selected>ACER</option>
                        @else
                            <option value="ACER">ACER</option>
                        @endif
                        @if($vendor->vendor=="MSI")
                            <option value="MSI" selected>MSI</option>
                        @else
                            <option value="MSI">MSI</option>
                        @endif
                        @if($vendor->vendor=="AORUS")
                            <option value="AORUS" selected>AORUS</option>
                        @else
                            <option value="AORUS">AORUS</option>
                        @endif
                        @if($vendor->vendor=="XPG")
                            <option value="XPG" selected>XPG</option>
                        @else
                            <option value="XPG">XPG</option>
                        @endif
                        @if($vendor->vendor=="Lenovo")
                            <option value="Lenovo" selected>Lenovo</option>
                        @else
                            <option value="Lenovo">Lenovo</option>
                        @endif
                        @if($vendor->vendor=="HP")
                            <option value="HP" selected>HP</option>
                        @else
                            <option value="HP">HP</option>
                        @endif
                        @if($vendor->vendor=="DELL")
                            <option value="DELL" selected>DELL</option>
                        @else
                            <option value="DELL">DELL</option>
                        @endif
                        @if($vendor->vendor=="Razer")
                            <option value="Razer" selected>Razer</option>
                        @else
                            <option value="Razer">Razer</option>
                        @endif
                        @if($vendor->vendor=="APPLE")
                            <option value="APPLE" selected>APPLE</option>
                        @else
                            <option value="APPLE">APPLE</option>
                        @endif
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
