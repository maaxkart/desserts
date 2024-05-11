<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from restabook.kwst.net/dark/menu3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 11:38:07 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/dark-style.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/color.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?=base_url()?>assets/images/fav.png">
        <style>
            .logo-holder img {
                width:auto;
                height:45px !important;
            }
            .logo-holder {
            float: left;
            height: 25px;
            position: relative;
            top: 18px;
            left: 25px;
        }
        .image-collge-wrap:before {
            border:none;
        }
        #reg-model{
            display:none;
        }
        #add{
            font-size: 20px;
            font-weight:600;
        }
        #work-time:before{
            content:none !important;
        }
        #dark-bg:before{
            content:none !important;
        }
        .menu-wrapper-title {
        padding: 50px 0;
        }
        </style>
        <script>
            function show()
            {
                var reg         = document.getElementById("reg");
                var reg_model   = document.getElementById("reg-model");
                var login       = document.getElementById("login");
                var register    = document.getElementById("register");
                login.addEventListener("click", () => {
                    reg.style.display="block";
                    reg_model.style.display = "none";
                });
                register.addEventListener("click", () => {
                    reg.style.display="none";
                    reg_model.style.display = "block";
                });
                                
            }
        </script>
    </head>
    <body>
        <!-- lodaer  -->
        <div class="loader-wrap">
            <div class="loader-item">
                <div class="cd-loader-layer" data-frame="25">
                    <div class="loader-layer"></div>
                </div>
                <span class="loader"></span>
            </div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!-- header  -->
            <header class="main-header">
                <!-- header-top  -->
                <div class="header-top">
                    <div class="container">
                        <!--<div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>-->
                        <div class="header-top_contacts"><a href="#"><span>Call now:</span> +489756412322</a><a href="#"><span>Write :</span> yourmail@domain.com</a></div>
                    </div>
                </div>
                <!--header-top end -->
                <div class="header-inner  fl-wrap">
                    <div class="container">
                        <div class="header-container fl-wrap">
                            <a href="#" class="logo-holder ajax"><img src="<?=base_url()?>assets/images/d-logo.png" alt=""></a>
                            <div class="show-reserv_button show-rb"> <i class="fal fa-user"></i><span>Login</span></div>
                            
                            <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">3</span><span class="header-tooltip">Your Cart</span></div>
                            <!-- nav-button-wrap-->
                            <div class="nav-button-wrap">
                                <div class="nav-button">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <!-- nav-button-wrap end-->
                            <!--  navigation -->
                            <div class="nav-holder main-menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('index');?>">Home <!--<i class="fas fa-caret-down"></i>--></a>
                                           
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('category');?>">Menu <!--<i class="fas fa-caret-down"></i>--></a>
                                           
                                        </li>
                                      <li>
                                            <a href="">Pages<i class="fas fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                             
                                                <li><a href="<?php echo base_url('shop');?>">Shop</a></li>
                                               <!-- <li><a href="product-single.html">Product Single</a></li>-->
                                                <li><a href="<?php echo base_url('cart');?>">Cart</a></li>
                                                <li><a href="<?php echo base_url('checkout');?>">Checkout</a></li>
                                                <li><a href="<?php echo base_url('gallery');?>">Gallery</a></li>
                                                <li><a href="<?php echo base_url('blog');?>">Blog </a></li>
                                                <li><a href="<?php echo base_url('myaccount');?>">My Account </a></li>
                                                 
                                            </ul>
                                            <!--second level end-->
                                        </li>
                                        
                                        <li><a href="<?php echo base_url('about');?>">About</a></li>
                                        <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                            <!-- navigation  end -->                           
                            <!-- header-cart_wrap  -->
                            <div class="header-cart_wrap novis_cart">
                                <div class="header-cart_title">Your Cart <span>4 items</span></div>
                                <div class="header-cart_wrap_container fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="widget-posts fl-wrap">
                                            <ol>
                                                <li class="clearfix">
                                                    <a href="#"  class="widget-posts-img"><img src="<?=base_url()?>assets/images/menu/1.jpg" class="respimg" alt=""></a>
                                                    <div class="widget-posts-descr">
                                                        <a href="#" title="">Grilled Steaks</a>
                                                        <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $45</div>
                                                    </div>
                                                    <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#"  class="widget-posts-img"><img src="<?=base_url()?>assets/images/menu/2.jpg" class="respimg" alt=""></a>
                                                    <div class="widget-posts-descr">
                                                        <a href="#" title="">Cripsy Lobster & Shrimp Bites</a>
                                                        <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $22</div>
                                                    </div>
                                                    <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="#"  class="widget-posts-img"><img src="<?=base_url()?>assets/images/menu/3.jpg" class="respimg" alt=""></a>
                                                    <div class="widget-posts-descr">
                                                        <a href="#" title="">Chicken tortilla soup</a>
                                                        <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $37</div>
                                                    </div>
                                                    <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart_wrap_total fl-wrap">
                                    <div class="header-cart_wrap_total_item">Subtotal : <span>$147</span></div>
                                </div>
                                <div class="header-cart_wrap_footer fl-wrap">
                                    <a href="<?php echo base_url('cart');?>"> View Cart</a>
                                    <a href="<?php echo base_url('checkout');?>">  Checkout</a>
                                </div>
                            </div>
                            <!-- header-cart_wrap end  -->
                            <!-- share-wrapper -->
                            <div class="share-wrapper isShare">
                                <div class="share-container fl-wrap"></div>
                            </div>
                            <!-- share-wrapper-end -->
                        </div>
                    </div>
                </div>
                <!-- header-inner end  -->
            </header>
            <!--header end -->	
            <!-- wrapper  -->	

            <?php 
$this->load->view($view_page); 
?>
            
                <!-- footer -->
                <div class="height-emulator fl-wrap"></div>
                <footer class="fl-wrap dark-bg fixed-footer">
                    <div class="container">
                        <div class="footer-top fl-wrap">
                          
                        </div>
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                                                                                	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Contact info  </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-contacts footer-box fl-wrap">
                                                <ul>
                                                    <li><span>Call :</span><a href="#">+489756412322</a> , <a href="#">+56897456123</a></li>
                                                    <li><span>Write  :</span><a href="#">yourmail@domain.com</a></li>
                                                    <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                                </ul>
                                            </div>
                                                                                             	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                        <div class="footer-bottom fl-wrap">
                            <div class="copyright">&#169; Dessertz 2024 . All rights reserved By TIC Technologies. </div>
                            <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->                               
            </div>
            <!-- wrapper end -->
            <!-- reservation-modal-wrap-->          
            <div class="reservation-modal-wrap">
                <div class="reserv-overlay crm">
                    <div class="cd-reserv-overlay-layer" data-frame="25">
                        <div class="reserv-overlay-layer"></div>
                    </div>
                </div>
                <div class="reservation-modal-container bot-element"id="reg">
                    <div class="reservation-modal-item fl-wrap">
                        <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
                        <div class="reservation-bg"></div>
                        <div class="section-title">
                        <h4>Don't have an account ? <a id="register"  onclick="show()"style="cursor:pointer;color:#fff"> Register here</a> </h4>
                       
                            <h2>Login</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="reservation-wrap">
                            <div id="reserv-message"></div>
                            <form  class="custom-form" action="https://restabook.kwst.net/dark/php/reservation.php" name="reservationform" id="reservationform">
                                <fieldset>
                                    <div class="row">
                                       
                                        <div class="col-lg-6" style="float:none;margin:auto;" >
                                            <input type="text" name="name" id="name" placeholder="Email Id *" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-6" style="float:none;margin:auto;">
                                            <input type="text"  name="email" id="email" placeholder="Password *" value=""/>
                                        </div>
                                      
                                    </div>
                                   <div class="clearfix"></div>
                                    
                                    <button class="btn color-bg" id="reservation-submit">Login <i class="fal fa-long-arrow-right"></i></button>
                                   
                                </fieldset>
                            </form>
                        </div>
                        <!-- reservation-wrap end-->
                    </div>
                </div>



                <div class="reservation-modal-container bot-element" id="reg-model">
                    <div class="reservation-modal-item fl-wrap">
                        <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
                        <div class="reservation-bg"></div>
                        <div class="section-title">
                        
                        <h4>Already have an account ? <a  id="login" onclick="show()"style="cursor:pointer;color:#fff"> Login</a> </h4>
                       
                            <h2>Register</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="reservation-wrap">
                            <div id="reserv-message"></div>
                            <form  class="custom-form" action="https://restabook.kwst.net/dark/php/reservation.php" name="reservationform" id="reservationform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="text"  name="state" id="state" placeholder="State/City *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email"  name="email" id="email" placeholder="Email Address *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password"  name="password" id="phone" placeholder="Password *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="password"  name="confirm_password" id="state" placeholder="Confirm Password *" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                    <button class="btn color-bg" id="reservation-submit">Register <i class="fal fa-long-arrow-right"></i></button>
                                   
                                </fieldset>
                            </form>
                        </div>
                        <!-- reservation-wrap end-->
                    </div>
                </div>
            </div>
            <!-- reservation-modal-wrap end-->  
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->                                                    
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/plugins.js"></script>
        <script src="<?=base_url()?>assets/js/scripts.js"></script>
    </body>

<!-- Mirrored from restabook.kwst.net/dark/menu3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 11:38:25 GMT -->
</html>