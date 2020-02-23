<!-- Modal -->
<div class="modal fade xxyyzz" id="productCustomize" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="sr_back_button" data-dismiss="modal"><a href="{{route('/')}}"><i class="fa fa fa-angle-left icon"></i></a></div>

                <h4 class="modal-title cust_title" >Customize your Pizza</h4>
            </div>
            <div class="modal-body">
                <div class="pizza-indicator"><img src="{{asset('/')}}front/assets/imgs/veg.svg" alt="Vegetarian"/></div>
                <div class="pizza-title text-center text-capitalize">Paneer Soya Supreme</div>
                <div class="pizza-desc text-center text-capitalize">Green Capsicum, Masala Soya Chunk, Onion, Paneer, Red Paprika</div>

                <div class="pizza-builder-group-title" data-toggle="collapse" data-target="#size">Select Pizza Size</div>
                <div id="size" class="collapse in">
                    <table width="100%">

                        <tr>
                            <td width="80%">
                                <div class="pizza-builder-group-item" >Medium | Serves 2
                                </div>
                            </td>
                            <td class="custom_piza_check medium" width="20%" data-name="product"><i aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <td width="80%">
                                <div class="pizza-builder-group-item" >Personal | Serves 2
                                </div>
                            </td>
                            <td class="custom_piza_check personal" width="20%" data-name="product"><i aria-hidden="true"></i></i></td>
                        </tr>
                    </table>
                </div>

                <div class="pizza-builder-group-title" data-toggle="collapse" data-target="#crust">Select Pizza Crust</div>
                <div id="crust" class="collapse in">
                    <table width="100%">
                        <tbody id="crust_content"></tbody>
                    </table>
                </div>

                <div class="pizza-builder-group-title" data-toggle="collapse" data-target="#toppings">Add or remove current toppings</div>
                <div id="toppings" class="collapse">
                    <table width="100%">
                        <tr>
                            <td width="60%">

                            </td>
                            <td width="30%">
                                Add 1 More
                            </td>
                            <td width="5%">

                            </td>
                            <td width="5%">

                            </td>

                        </tr>
                        <tr>
                            <td width="60%">
                                <div class="pizza-builder-group-item" >Medium | Serves 2
                                </div>
                            </td>
                            <td width="20%">
                                <div>
                                    <!-- Material unchecked -->
                                    <div class="form-check">
                                        <input type="checkbox" name="current_toppings" class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked"></label>
                                    </div>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="group-item-price" >

                                </div>
                            </td>
                            <td class="custom_piza_check" width="10%">
                                {{--<i class="fa fa-check text-right" aria-hidden="true"></i>--}}
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">
                                <div class="pizza-builder-group-item" >Medium | Serves 2
                                </div>
                            </td>
                            <td width="20%">
                                <div>
                                    <!-- Material unchecked -->
                                    <div class="form-check">
                                        <input type="checkbox" name="current_toppings" class="form-check-input" id="materialUnchecked2">
                                        <label class="form-check-label" for="materialUnchecked2"></label>
                                    </div>
                                </div>
                            </td>
                            <td width="10%">
                                <div class="group-item-price" >

                                </div>
                            </td>
                            <td class="custom_piza_check" width="10%">
                                {{--<i class="fa fa-check text-right" aria-hidden="true"></i>--}}
                            </td>
                        </tr>

                    </table>
                </div>

                {{--<div class="pizza-builder-group-title" data-toggle="collapse" data-target="#extra">Add something extra</div>--}}
                {{--<div id="extra" class="collapse">--}}
                    {{--<table width="100%">--}}
                        {{--<tr>--}}
                            {{--<td width="60%">--}}
                                {{--<div class="pizza-builder-group-item" >Medium | Serves 2--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td width="20%">--}}
                                {{--<div class="group-item-price" >+95--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td class="custom_piza_check" width="20%"><i class="fa fa-plus text-right" aria-hidden="true"></i>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td width="60%">--}}
                                {{--<div class="pizza-builder-group-item" >Medium | Serves 2--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td width="20%">--}}
                                {{--<div class="group-item-price" >+95--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td class="custom_piza_check" width="20%"><i class="fa fa-plus text-right" aria-hidden="true"></i>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</div>--}}

                <div class="cart_card">
                    <table>
                        <tr>
                            <td width="70%"><span class="storename">Quantity</span></td>
                            <td width="30%">
                                            <span class="storename quantity">
                                                <div class="minus-circle">
                                                    <button id="minus-circle" type="button"><i class="fa fa-minus-circle"></i></button>
                                                </div>
                                                <div class="item-qty"> 1 </div>
                                                <div class="plus-circle">
                                                    <button id="plus-circle" type="button"><i class="fa fa-plus-circle"></i></button>
                                                </div>
                                            </span>
                            </td>
                            {{--<td  width="30%">--}}
                                    {{--<span class="storename">--}}
                                        {{--<i class="fa fa-plus-circle" style="font-size: 20px;color: #e0e0e0;margin-right: 5px;"></i> 1 <i class="fa fa-minus-circle" style="font-size: 20px;color: #e0e0e0;margin-left: 5px;"></i>--}}
                                    {{--</span>--}}
                            {{--</td>--}}

                        </tr>
                    </table>
                </div><!-- .store_card -->

            </div>

            <div class="modal-footer">
                <form class="addToCart" action="#" method="post">
                    <input type="hidden" name="product_id">
                    <input type="hidden" name="product_virtual_id" value="786">
                    <input type="hidden" name="product_name">
                    <input type="hidden" name="product_qty" min="1">
                    <input type="hidden" name="product_price">
                    <input type="hidden" name="product_image">
                    {{--<input class="btn btn-success add2cart" type="submit" name="submit" value="Add">--}}
                    <button  type="submit" class="checkout_btn add2cart"> Add To Cart <span class="text-right ml-5" id="total_price">00.00</span></button>
                </form>
            </div>
        </div>

    </div>
</div>