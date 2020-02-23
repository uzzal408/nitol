<table>
    <col width="50%" />
    <col width="5%" />
    <col width="15%" />
    <col width="30%" />
    <tr>
        <td><span class="">Item</span></td>
        <td><span class=""></span></td>
        <td><span class="">Quantity</span></td>
        <td><span class="">Amount</span></td>
    </tr>
    @php($subtotal = 0)
    @php($total_price = 0)
    @foreach($carts as $cart)
        <tr>
            <td><span class="storename">{{$cart->name}}</span></td>
            <td><span class="storename"><i class="fa fa-angle-down"></i></span></td>
            <td>
                                            <span class="storename quantity">
                                                <div class="minus-circle">
                                                    <form class="UpdateToCart" action="{{-- route('update-cart-product')  --}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="qty" id="" value="{{(int)$cart->qty - 1}}">
                                                    <input type="hidden" name="rowId" id="" value="{{$cart->rowId}}">
                                                    <button type="submit"><i class="fa fa-minus-circle"></i></button>
                                                </form>
                                                </div>
                                                <div class="item-qty">{{$cart->qty}}</div>
                                                <div class="plus-circle">
                                                    <form class="UpdateToCart" action="{{-- route('update-cart-product')  --}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="qty" id="" value="{{(int)$cart->qty + 1}}">
                                                    <input type="hidden" name="rowId" id="" value="{{$cart->rowId}}">
                                                    <button class="plus-circle" type="submit"><i class="fa fa-plus-circle"></i></button>
                                                </form>
                                                </div>
                                            </span>
            </td>
            <td style="">
                <span class="storename">৳ {{$subtotal = $cart->price * $cart->qty}} </span>
                @php($total_price += $subtotal)
                <a class="times-circle" href="{{route('delete-cart-product',['id'=>$cart->rowId])}}">
                    <i class="fa fa-times-circle" aria-hidden="true"
                       style="font-size: 20px;color: #e0e0e0;margin-left: 10px;"></i>
                </a>

            </td>

        </tr>
    @endforeach
    @php(Session::put('totalPrice',$total_price))
</table>
<span id="totalPrice" style="display: none;">{{Session::get('totalPrice')}}</span>