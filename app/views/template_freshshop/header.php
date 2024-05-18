<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title><?=$data['page_title']." | ".WEBSITE_TITLE?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?=ASSETS?>/template_freshshop/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=ASSETS?>/template_freshshop/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>/template_freshshop/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="public/assests/template_freshshop/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>/template_freshshop/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>/template_freshshop/css/custom.css">

    <!-- [if lt IE 9]> 
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->

</head>

<body>
    <div id="under-construction" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center bg-warning fs-1 fw-bold">
        <div class="p-2">
            <p class=""> >>>>>> This Website is under construction <<<<<< </p>
        </div>
    </div>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-row">
					<!-- <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
							<option>¥ JPY</option>
							<option>$ USD</option>
							<option>€ EUR</option>
						</select>
                    </div> -->
                    <!-- <div class="right-phone-box">
                        <p >Call US :- <a href="#"onmouseover="this.style.color='#ed6f21';" onmouseout="this.style.color='white';"> +11 900 800 100</a></p>
                    </div> -->
                    <div class="our-link">
                        <ul>
                            <li><a href="<?=ROOT?>account"><i class="fa fa-user s_color" ></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="<?=ROOT?>contact"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-row-reverse">
					<div class="our-link">
                        <ul class="">
                            <?php if(!isset($_SESSION["firstname"])) :?>
                                <li><a href="<?=ROOT?>register"><i class="fa fa-user s_color" ></i> Register</a></li>
                                <li><a href="<?=ROOT?>login"><i class="fas fa-location-arrow"></i> Login</a></li>
                            <?php else:?>    
                                <li>Welcome <?=$_SESSION['firstname']?><?=$_SESSION['lastname']?></li>
                                <li><a href="<?=ROOT?>logout"><i class="fas fa-location-arrow"></i> Logout</a></li>
                            <?php endif;?>
                        </ul>
						<!-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In"  >
							<option >Register Here</option>
							<option>Sign In</option>
						</select> -->
					</div>
                    <!-- <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="<?=ROOT?>index"><img src="https://i.etsystatic.com/isla/c30a0d/69076457/isla_180x180.69076457_m35rjrvp.jpg?version=0" class="logo" width="108px"  alt="" ></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp" >
                        <li class="nav-item active"><a class="nav-link" style="color: #ed6f21"  href="<?=ROOT?>index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: #ed6f21" href="<?=ROOT?>about">About Us</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown" >products</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html" >Sidebar Shop</a></li>
								<li><a href="shop-detail.html" >Shop Detail</a></li>
                                <li><a href="cart.html" >Cart</a></li> 
                                <li><a href="checkout.html" >Checkout</a></li>
                                <li><a href="my-account.html" >My Account</a></li>
                                <li><a href="wishlist.html" >Wishlist</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href="<?=ROOT?>products" style="color: #ed6f21">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=ROOT?>contact" style="color: #ed6f21">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="nav-item">
							<a href="<?=ROOT?>cart/?product_id=newCart" style="color: #ed6f21">
								<p><i class="fa fa-shopping-bag"></i> My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">

                    <?php
                
                        foreach($products as $item)
                        {
                            if(isset($_SESSION['cart_list'][$item['product_id']])){
                            //get just first image of each products in order to show product list
                            $firstImageUrl = isset($item['images'][0]['images_url']) ? $item['images'][0]['images_url'] : null;
                            echo'
                            <li>
                                <a href="#" class="photo"><img src="'.ASSETS.'/'.$firstImageUrl.'" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">'.$item['product_name'].' </a></h6>
                                <p>1x - <span class="price">$'.$item['product_preis_now'].'</span></p>
                            </li>
                            ';
                            }
                        }
                    
                    ?>
                        <li class="total">
                            <a href="<?=ROOT?>cart/?product_id=newCart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        </li>


                    </ul>
                </li>
            </div> -->
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->