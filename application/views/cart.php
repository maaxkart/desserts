<div id="wrapper">
                <!-- content  -->	
                <div class="content">
                    <!--  section  -->  
                    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?=base_url()?>assets/images/bg/ice7.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Order food with home delivery</h4>
                                <h2>Your Cart</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                        </div>
                        
                        <div class="brush-dec"></div>
                    </section>
                    <!--  section  end-->  
                    <!--  section  -->   
                    <section class="hidden-section">
                        <div class="container">
                            <!-- CHECKOUT TABLE -->
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="cart-title">Your cart <span>3 items</span></h4>
                                    <table class="table table-border checkout-table">
                                        <tbody>
                                            <tr>
                                                <th class="hidden-xs">Item</th>
                                                <th>Description</th>
                                                <th class="hidden-xs">Price</th>
                                                <th>Count</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">
                                                    <a href="#"><img src="<?=base_url()?>assets/images/menu/1.jpg" alt="" class="respimg"></a>
                                                </td>
                                                <td>
                                                    <h5 class="product-name">Grilled Steaks</h5>
                                                </td>
                                                <td class="hidden-xs">
                                                    <h5 class="order-money">$45.00</h5>
                                                </td>
                                                <td>
                                                    <input type="number" name="cartin1" value="1" max="50" min="1" class="order-count">
                                                </td>
                                                <td>
                                                    <h5 class="order-money">$45.00</h5>
                                                </td>
                                                <td class="pr-remove">
                                                    <a href="#" title="Remove"><i class="fal fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">
                                                    <a href="#"><img src="<?=base_url()?>assets/images/menu/2.jpg" alt="" class="respimg"></a>
                                                </td>
                                                <td>
                                                    <h5 class="product-name">Cripsy Lobster & Shrimp Bites</h5>
                                                </td>
                                                <td class="hidden-xs">
                                                    <h5 class="product-title order-money">$22.00</h5>
                                                </td>
                                                <td>
                                                    <input type="number" name="cartin2" value="2" max="50" min="1" class="order-count">
                                                </td>
                                                <td>
                                                    <h5 class="order-money">$22.00</h5>
                                                </td>
                                                <td class="pr-remove">
                                                    <a href="#" title="Remove"><i class="fal fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">
                                                    <a href="#"><img src="<?=base_url()?>assets/images/menu/3.png" alt="" class="respimg"></a>
                                                </td>
                                                <td>
                                                    <h5 class="product-name">Chicken tortilla soup</h5>
                                                </td>
                                                <td class="hidden-xs">
                                                    <h5 class="product-title order-money">$37.00</h5>
                                                </td>
                                                <td>
                                                    <input type="number" name="cartin3" value="1" max="50" min="1" class="order-count">
                                                </td>
                                                <td>
                                                    <h5 class="order-money">$37.00</h5>
                                                </td>
                                                <td class="pr-remove">
                                                    <a href="#" title="Remove"><i class="fal fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- COUPON -->
                                    <div class="coupon-holder">
                                        <input type="text" name="cartcoupon" placeholder="Coupon code">
                                        <button type="submit" class="btn-a">Apply</button>
                                        <button type="submit" class="pull-right btn-uc">Update Cart</button>
                                    </div>
                                    <!-- /COUPON -->                                     
                                </div>
                                <div class="col-md-4">
                                    <!-- CART TOTALS  -->
                                    <div class="cart-totals dark-bg fl-wrap">
                                        <h3>Cart totals</h3>
                                        <table class="total-table">
                                            <tbody>
                                                <tr>
                                                    <th>Cart Subtotal:</th>
                                                    <td>$240.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping Total:</th>
                                                    <td>$12.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>$252.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="cart-totals_btn color-bg">Proceed to Checkout</button>
                                    </div>
                                    <!-- /CART TOTALS  -->                              
                                </div>
                            </div>
                            <!-- /CHECKOUT TABLE -->
                        </div>
                        <div class="section-bg">
                            <div class="bg"  data-bg="<?=base_url()?>assets/images/bg/dec/section-bg.png"></div>
                        </div>
                    </section>
                    <!--  section end  -->  
                    <div class="brush-dec2 brush-dec_bottom"></div>
                </div>
                <!-- content end  -->