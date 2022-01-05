@extends('app')

@section('title', '新增一筆電腦資料')

@section('laptops_contents')
<h1>筆電的新增表單</h1>
<form method="post" action="/laptops/laptops/">
    @csrf
    <table border="1">
        <tr>
            <td>筆電</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>廠商</td>
            <td>
                <select name="vid">
                    @foreach($vendors as $vendors)
                        <option value="{{$vendors->id}}">{{$vendors->vendor}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>顯示卡</td>
            <td>
                <select name="graphics_card" required>
                    <option value="GeForce RTX3080">GeForce RTX3080</option>
                    <option value="GeForce RTX3050 Ti">GeForce RTX3050 Ti</option>
                    <option value="Intel UHD Graphics615">Intel UHD Graphics615</option>
                    <option value="Intel lris Xe Graphics">Intel lris Xe Graphics</option>
                    <option value="GeForce RTX2060">GeForce RTX2060</option>
                    <option value="GeForce RTX3050">GeForce RTX3050</option>
                    <option value="GeForce RTX3070">GeForce RTX3070</option>
                    <option value="GeForce GTX1660 Ti">GeForce GTX1660 Ti</option>
                    <option value="GeForce RTX2070">GeForce RTX2070</option>
                    <option value="INTEGRATED_IRIS_XE_GRAPHICS">INTEGRATED_IRIS_XE_GRAPHICS</option>
                    <option value="GeForce GTX1650 Ti">GeForce GTX1650 Ti</option>
                    <option value="MX350">MX350</option>
                    <option value="Intel lris XE">Intel lris XE</option>
                    <option value="Apple M1">Apple M1</option>
                    <option value="Apple M1 Pro">Apple M1 Pro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>尺寸</td>
            <td>
                <form>
                    <input type="radio" id="html" name="size" value="13" required>
                    <label for="html">13</label><br>
                    <input type="radio" id="html" name="size" value="14" required>
                    <label for="html">14</label><br>
                    <input type="radio" id="html" name="size" value="15" required>
                    <label for="html">15</label><br>
                    <input type="radio" id="html" name="size" value="16" required>
                    <label for="html">16</label><br>
                    <input type="radio" id="html" name="size" value="17" required>
                    <label for="html">17</label><br>
                </form>
            </td>
        </tr>
        <tr>
            <td>中央處理器</td>
            <td><input type="text" name="cpu"/></td>
        </tr>
        <tr>
            <td>價格</td>
            <td><input type="text" name="price"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
@endsection
