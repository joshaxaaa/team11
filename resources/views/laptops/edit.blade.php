@extends('app')
@section('title', '編輯一筆電腦資料')
@section('laptops_contents')
    <h1>筆電的編輯表單</h1>
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
                <td><input type="text" name="name" value="{{ $laptop->name }}" required/></td>
            </tr>
            <tr>
                <td>廠商</td>
                <td>
                    <select name="vid" required>
                        @foreach($vendors as $vendor)
                            @if($vendor->id == $laptop->vid)
                                <option value="{{$vendor->id}}" selected>{{$vendor->vendor}}</option>
                            @else
                                <option value="{{$vendor->id}}">{{$vendor->vendor}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>顯示卡</td>
                <td>
                    <select name="graphics_card" required>
                        @if($laptop->graphics_card=="GeForce RTX3080")
                            <option value="GeForce RTX3080" selected>GeForce RTX3080</option>
                        @else
                            <option value="GeForce RTX3080">GeForce RTX3080</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce RTX3050 Ti")
                            <option value="GeForce RTX3050 Ti" selected>GeForce RTX3050 Ti</option>
                        @else
                            <option value="GeForce RTX3050 Ti">GeForce RTX3050 Ti</option>
                        @endif
                        @if($laptop->graphics_card=="Intel UHD Graphics615")
                            <option value="Intel UHD Graphics615" selected>Intel UHD Graphics615</option>
                        @else
                            <option value="Intel UHD Graphics615">Intel UHD Graphics615</option>
                        @endif
                        @if($laptop->graphics_card=="Intel lris Xe Graphics")
                            <option value="Intel lris Xe Graphics" selected>Intel lris Xe Graphics</option>
                        @else
                            <option value="Intel lris Xe Graphics">Intel lris Xe Graphics</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce RTX2060")
                            <option value="GeForce RTX2060" selected>GeForce RTX2060</option>
                        @else
                            <option value="GeForce RTX2060">GeForce RTX2060</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce RTX3050")
                            <option value="GeForce RTX3050" selected>GeForce RTX3050</option>
                        @else
                            <option value="GeForce RTX3050">GeForce RTX3050</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce RTX3070")
                            <option value="GeForce RTX3070" selected>GeForce RTX3070</option>
                        @else
                            <option value="GeForce RTX3070">GeForce RTX3070</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce GTX1660 Ti")
                            <option value="GeForce GTX1660 Ti" selected>GeForce GTX1660 Ti</option>
                        @else
                            <option value="GeForce GTX1660 Ti">GeForce GTX1660 Ti</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce RTX2070")
                            <option value="GeForce RTX2070" selected>GeForce RTX2070</option>
                        @else
                            <option value="GeForce RTX2070">GeForce RTX2070</option>
                        @endif
                        @if($laptop->graphics_card=="INTEGRATED_IRIS_XE_GRAPHICS")
                            <option value="INTEGRATED_IRIS_XE_GRAPHICS" selected>INTEGRATED_IRIS_XE_GRAPHICS</option>
                        @else
                            <option value="INTEGRATED_IRIS_XE_GRAPHICS">INTEGRATED_IRIS_XE_GRAPHICS</option>
                        @endif
                        @if($laptop->graphics_card=="GeForce GTX1650 Ti")
                            <option value="GeForce GTX1650 Ti" selected>GeForce GTX1650 Ti</option>
                        @else
                            <option value="GeForce GTX1650 Ti">GeForce GTX1650 Ti</option>
                        @endif
                        @if($laptop->graphics_card=="MX350")
                            <option value="MX350" selected>MX350</option>
                        @else
                            <option value="MX350">MX350</option>
                        @endif
                        @if($laptop->graphics_card=="Intel lris XE")
                            <option value="Intel lris XE" selected>Intel lris XE</option>
                        @else
                            <option value="Intel lris XE">Intel lris XE</option>
                        @endif
                        @if($laptop->graphics_card=="Apple M1")
                            <option value="Apple M1" selected>Apple M1</option>
                        @else
                            <option value="Apple M1">Apple M1</option>
                        @endif
                        @if($laptop->graphics_card=="Apple M1 Pro")
                            <option value="Apple M1 Pro" selected>Apple M1 Pro</option>
                        @else
                            <option value="Apple M1 Pro">Apple M1 Pro</option>
                        @endif
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
                <td><input type="text" name="cpu" value="{{ $laptop->cpu }}"/></td>
            </tr>
            <tr>
                <td>價格</td>
                <td><input type="text" name="price" value="{{ $laptop->price }}"/></td>
            </tr>
        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
