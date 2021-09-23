<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Ecommerce Dynamic Web Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/font-awesome.min.css') }}" />

    
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/animate.css') }}" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/owl.carousel.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/owl.theme.default.min.css') }}" />



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('templateordering/css/webslidemenu.css') }}" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="{{ asset('templateordering/css/main.css') }}" />
    <link rel="icon" href="{{ asset('templateordering/images/logo.png') }}" />
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            <div class="top-header">
                <div class="top-header-left pull-left">
                    <a href="products.html">Upto 50% Discount today</a>
                </div>
                <div class="top-header-right pull-right">
                    <div class="container-fluid">
                        <ul>
                            <li class="top-header-list">
                                <div class="dropdown">
                                    <a href="account.html" class="link dropdown-toggle pointer" id="menu1" data-toggle="dropdown">
                                        <span class="icon"><em class="fa fa-user"></em></span>
                                        My Account
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="cart.html">My Orders</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="account.html">Wallets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="login.html">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="top-header-list">
                                <a href="account.html">
                                    <span class="icon"><em class="fa fa-credit-card"></em></span>
                                    Credit Card
                                </a>
                            </li>
                            <li class="top-header-list"><a href="faq.html">
                                <span class="icon"><em class="fa fa-question-circle"></em></span>
                                Helps
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="index.html">
                            <img src="{{ asset('templateordering/images/logo.png') }}" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <em class="fa fa-search" aria-hidden="true"> </em>
                            </button>
                        </form>
                    </div>

                    <div class="header-cart">
                        <a href="cart.html" class="cart-link" data-toggle="modal" data-target="#cart-item"><em class="fa fa-cart-arrow-down"></em></a>
                        <span class="number-of-cart">20</span>
                    </div>

                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h4 class="modal-title">Cart Products</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th id="">No</th>
                                        <th id="">Item Name</th>
                                        <th id="">Item Image</th>
                                        <th id="">Quantity</th>
                                        <th id="">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Digital Camera</td>
                                        <td><img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>3</td>
                                        <td>200$</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Samsung Galaxy 7</td>
                                        <td><img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>1</td>
                                        <td>500$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="5">
                                            Total Price <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                        </td>
                                    </tr>
                                    <div class="clearfix"></div>
                                </tbody>
                            </table>
                            <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                            </button>
                            <a href="cart.html" class="btn btn-yellow">Check Out</a>
                        </div>
                    </div>

                </div>
            </div> <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart -->





    <div class="header-navigation">
        <div class="wsmenucontainer clearfix">
          <div class="overlapblackbg"></div>
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="images/logo.png" alt=""></a></div>


          <div class="headerfull"> 
            <!--Main Menu HTML Code-->
            <div class="wsmain">
              <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">
                  <li><span class="wsmenu-click"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#" class="navtext"><span>Shop By</span> <span>Department</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                      <div class="wsshopwp clearfix" style="height: 421px;">
                          <ul class="wstabitem clearfix">
                            <li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-male"></em> Women's Clothing &amp; Accessories</a>
                              <div class="wstitemright clearfix wstitemrightactive" style="height: auto;">
                                <div class="wstmegamenucoll clearfix">
                                  <div class="wstheading">Women's Clothing</div>
                                  <ul class="wstliststy01">
                                      <li><a href="products.html">Sleepwear &amp; Robes</a></li>
                                      <li><a href="products.html">Shapewear </a></li>
                                      <li><a href="products.html">Tops &amp; shirts</a></li>
                                      <li><a href="products.html">Sweatshirts</a></li>
                                      <li><a href="products.html">Fashion Hoodies <span class="wstmenutag greentag">New</span></a></li>
                                      <li><a href="#">Jeans &amp; Trousers</a></li>
                                      <li><a href="#">Capris and Shorts <span class="wstmenutag bluetag">Trending</span></a></li>
                                      <li><a href="#">Leggings</a></li>
                                      <li><a href="#">Swimsuits &amp; Cover Ups</a></li>
                                      <li><a href="#">Lingerie, Sleep &amp; Lounge</a></li>
                                      <li><a href="#">Inner &amp; Nightwear</a> <span class="wstmenutag redtag">Sale</span></li>
                                      <li><a href="#">Jumpsuits, Rompers &amp; Overalls</a></li>
                                      <li><a href="#">Coats, Jackets &amp; Vests</a></li>
                                      <li><a href="#">Suiting &amp; Blazers </a></li>
                                      <li><a href="#">Socks &amp; Hosiery</a></li>
                                  </ul>
                                  <div class="cl" style="height:8px;"></div>
                                  <div class="wstheading">Handbags &amp; Wallets</div>
                                  <ul class="wstliststy01">
                                    <li><a href="#">Clutches</a> </li>
                                    <li><a href="#">Cross-Body Bags</a> </li>
                                    <li><a href="#">Evening Bags</a> </li>
                                    <li><a href="#">Shoulder Bags</a> <span class="wstmenutag orangetag">Hot</span></li>
                                    <li><a href="#">Top-Handle Bags</a> </li>
                                    <li><a href="#">Wristlets</a> </li>
                                </ul>
                                <div class="cl" style="height:8px;"></div>
                                <div class="wstheading">Accessories</div>
                                <ul class="wstliststy01">
                                    <li><a href="#">Handbag Accessories</a> </li>
                                    <li><a href="#">Sunglasses Accessories</a> </li>
                                    <li><a href="#">Eyewear Accessories</a> </li>
                                    <li><a href="#">Scarves &amp; Wraps</a> </li>
                                    <li><a href="#">Gloves &amp; Mittens</a> </li>
                                    <li><a href="#">Hats &amp; Caps</a> </li>
                                    <li><a href="#">Handbag Accessories</a> </li>
                                </ul>
                            </div>
                            <div class="wstmegamenucolr clearfix">
                              <div class="wstbootslider clearfix">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item"> <a href="#"><img src="./Megamenu_files/woman-ad-img.jpg" alt=""></a>
                                      <div class="carousel-caption">
                                        <h3>First slide label</h3>
                                    </div>
                                </div>
                                <div class="item active"> <a href="#"><img src="./Megamenu_files/woman-ad-img02.jpg" alt=""></a>
                                  <div class="carousel-caption">
                                    <h3>Second slide label</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Controls --> 
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <em class="fa fa-angle-left" aria-hidden="true"></em> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <em class="fa fa-angle-right" aria-hidden="true"></em> <span class="sr-only">Next</span> </a> </div>
                    </div>
                </div>
            </div>
        </li>
        <li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-female"></em> Men's Clothing &amp; Accessories</a>
          <div class="wstitemright clearfix" style="height: auto;">
            <div class="wstmegamenucoll clearfix">
              <div class="wstheading">Men's Clothing</div>
              <ul class="wstliststy01">
                <li><a href="#">Shirts <span class="wstmenutag greentag">New</span></a></li>
                <li><a href="#">Fashion Hoodies &amp; Sweatshirts </a></li>
                <li><a href="#">Sweaters</a></li>
                <li><a href="#">Jackets &amp; Coats</a></li>
                <li><a href="#">Jeans </a></li>
                <li><a href="#">Pants &amp; Trousers</a></li>
                <li><a href="#">Capris and Shorts </a></li>
                <li><a href="#">Swim</a></li>
                <li><a href="#">Suits &amp; Sport Coats</a></li>
                <li><a href="#">Underwear</a></li>
                <li><a href="#">Socks</a> </li>
                <li><a href="#">Sleep &amp; Lounge</a></li>
                <li><a href="#">T-Shirts &amp; Tanks <span class="wstmenutag redtag">20% off Sale</span></a></li>
                <li><a href="#">Active</a></li>
                <li><a href="#">Sport Coats <span class="wstmenutag bluetag">Trending</span></a></li>
            </ul>
            <div class="cl" style="height:8px;"></div>
            <div class="wstheading">Shoes &amp; Wallets</div>
            <ul class="wstliststy01">
                <li><a href="#">Athletic</a> </li>
                <li><a href="#">Boots</a> <span class="wstmenutag orangetag">Exclusive</span></li>
                <li><a href="#">Fashion Sneakers</a> </li>
                <li><a href="#">Loafers &amp; Slip-Ons</a> </li>
                <li><a href="#">Mules &amp; Clogs</a> </li>
                <li><a href="#">Outdoor</a> </li>
                <li><a href="#">Oxfords</a> </li>
                <li><a href="#">Sandals</a> </li>
                <li><a href="#">Slippers</a> </li>
            </ul>
            <div class="cl" style="height:8px;"></div>
            <div class="wstheading">Accessories</div>
            <ul class="wstliststy01">
                <li><a href="#">Belts</a> </li>
                <li><a href="#">Suspenders</a> </li>
                <li><a href="#">Eyewear Accessories</a> </li>
                <li><a href="#">Neckties</a> </li>
                <li><a href="#">Bow Ties &amp; Cummerbunds</a> </li>
                <li><a href="#">Collar Stays</a> </li>
            </ul>
        </div>
        <div class="wstmegamenucolr clearfix"><a href="#"><img src="{{ asset('templateordering/./Megamenu_files/man-ad-img.jpg') }}" alt=""></a></div>
    </div>
</li>
<li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-play-circle"></em> Movies, Music &amp; Games</a>
  <div class="wstitemright clearfix" style="height: auto;">
    <ul class="wstliststy02">
      <li class="wstheading">Latest Movies</li>
      <li><a href="#">Action &amp; Adventure <span class="wstmenutag greentag">New</span></a></li>
      <li><a href="#">Bollywood </a></li>
      <li><a href="#">Comedy</a></li>
      <li><a href="#">Documentary</a></li>
      <li><a href="#">Educational</a></li>
      <li><a href="#">Exercise &amp; Fitness </a></li>
      <li><a href="#">Faith &amp; Spirituality</a></li>
      <li><a href="#">Fantasy</a></li>
      <li><a href="#">Romance</a></li>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Newest Games</li>
      <li><a href="#">PlayStation 4 </a> </li>
      <li><a href="#">Xbox One </a> <span class="wstmenutag orangetag">Most Viewed</span></li>
      <li><a href="#">Xbox 360 </a> </li>
      <li><a href="#">Nintendo DS</a> </li>
      <li><a href="#">PlayStation Vita </a> </li>
      <li><a href="#">Retro Gaming</a> </li>
      <li><a href="#">Digital Games</a> </li>
      <li><a href="#">Microconsoles</a> </li>
      <li><a href="#">Kids &amp; Family </a> </li>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Popular Music Genre</li>
      <li><a href="#">Alternative &amp; Indie Rock</a> </li>
      <li><a href="#">Broadway &amp; Vocalists</a> </li>
      <li><a href="#">Children's Music</a> </li>
      <li><a href="#">Christian <span class="wstmenutag bluetag">50% off</span></a> </li>
      <li><a href="#">Classical</a> </li>
      <li><a href="#">Classic Rock</a> </li>
      <li><a href="#">Comedy &amp; Miscellaneous </a> </li>
      <li><a href="#">Country</a> </li>
      <li><a href="#">Dance &amp; Electronic</a> </li>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Popular Music Genre</li>
      <li><a href="#">Alternative &amp; Indie Rock</a> </li>
      <li><a href="#">Broadway &amp; Vocalists</a> </li>
      <li><a href="#">Children's Music <span class="wstmenutag redtag">Discounted</span></a> </li>
      <li><a href="#">Christian</a> </li>
      <li><a href="#">Classical</a> </li>
      <li><a href="#">Classic Rock</a> </li>
      <li><a href="#">Comedy &amp; Miscellaneous</a> </li>
      <li><a href="#">Country</a> </li>
      <li><a href="#">Dance &amp; Electronic</a> </li>
  </ul>
  <div class="wstadsize01 clearfix"><a href="#"><img src="{{ asset('templateordering/./Megamenu_files/ad-size01.jpg') }}" alt=""></a></div>
  <div class="wstadsize02 clearfix"><a href="#"><img src="{{ asset('templateordering/./Megamenu_files/ad-size02.jpg') }}" alt=""></a></div>
</div>
</li>
<li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-cutlery"></em>Home &amp; Kitchen</a>
  <div class="wstitemright clearfix kitchenmenuimg" style="height: auto;">
    <ul class="wstliststy02">
      <li class="wstheading">Home Appliances</li>
      <li><a href="#">Air Conditioners <span class="wstmenutag greentag">New</span></a></li>
      <li><a href="#">Air Coolers </a></li>
      <li><a href="#">Fans</a></li>
      <li><a href="#">Microwaves</a></li>
      <li><a href="#">Refrigerators</a></li>
      <li><a href="#">Washing Machines </a></li>
      <li><a href="#">Jars &amp; Containers </a></li>
      <li><a href="#">LED &amp; CFL bulbs </a></li>
      <li><a href="#">Drying Racks </a></li>
      <li><a href="#">Laundry Baskets</a> <span class="wstmenutag orangetag">New</span></li>
      <li><a href="#">Vases</a></li>
      <li><a href="#">Clocks</a></li>
      <li><a href="#">Washing Machines </a></li>
      <li><a href="#">Bedsheets </a></li>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Kitchen Appliances</li>
      <li><a href="#">Air Fryers </a></li>
      <li><a href="#">Espresso Machines</a></li>
      <li><a href="#">Food Processors</a> <span class="wstmenutag bluetag">Popular</span></li>
      <li><a href="#">Hand Blenders</a></li>
      <li><a href="#">Induction Cooktops</a></li>
      <li><a href="#">Juicers</a></li>
      <li><a href="#">Microwave Ovens</a></li>
      <li><a href="#">Mixers &amp; Grinders</a></li>
      <li><a href="#">Ovens</a></li>
      <li><a href="#">Rice Cookers</a></li>
      <li><a href="#">Stand Mixers</a></li>
      <li><a href="#">Sandwich Makers</a></li>
      <li><a href="#">Tandoor &amp; Grills</a></li>
      <li><a href="#">Toasters</a></li>
  </ul>
</div>
</li>
<li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-television"></em>Electronics Appliances</a>
  <div class="wstitemright clearfix" style="height: auto;">
    <ul class="wstliststy02">
      <li><img src=".{{ asset('templateordering/./Megamenu_files/ele-menu-img01.jpg') }}" alt=" "></li>
      <li class="wstheading">TV &amp; Audio</li>
      <li><a href="#">4K Ultra HD TVs </a></li>
      <li><a href="#">Curved TVs </a></li>
      <li><a href="#">LED &amp; LCD TVs</a></li>
      <li><a href="#">OLED TVs</a> <span class="wstmenutag bluetag">Popular</span></li>
      <li><a href="#">Plasma TVs</a></li>
      <li><a href="#">Smart TVs</a></li>
      <li><a href="#">Home Theater</a></li>
      <li><a href="#">Wireless &amp; streaming</a></li>
      <li><a href="#">Stereo System</a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="{{ asset('templateordering/./Megamenu_files/ele-menu-img02.jpg') }}" alt=" "></li>
      <li class="wstheading">Camera, Photo &amp; Video</li>
      <li><a href="#">Accessories <span class="wstcount">(1145)</span></a></li>
      <li><a href="#">Bags &amp; Cases <span class="wstcount">(445)</span></a></li>
      <li><a href="#">Binoculars &amp; Scopes <span class="wstcount">(45)</span></a></li>
      <li><a href="#">Digital Cameras <span class="wstcount">(845)</span></a> </li>
      <li><a href="#">Film Photography <span class="wstcount">(245)</span></a> <span class="wstmenutag bluetag">Popular</span></li>
      <li><a href="#">Flashes <span class="wstcount">(105)</span></a></li>
      <li><a href="#">Lenses <span class="wstcount">(445)</span></a></li>
      <li><a href="#">Lighting &amp; Studio <span class="wstcount">(225)</span></a></li>
      <li><a href="#">Video <span class="wstcount">(145)</span></a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="{{ asset('templateordering/./Megamenu_files/ele-menu-img03.jpg') }}" alt=" "></li>
      <li class="wstheading">Cell Phones &amp; Accessories</li>
      <li><a href="#">Unlocked Cell Phones </a></li>
      <li><a href="#">Smartwatches </a></li>
      <li><a href="#">Carrier Phones</a></li>
      <li><a href="#">Cell Phone Cases</a> <span class="wstmenutag orangetag">Hot</span></li>
      <li><a href="#">Apple Cell Phones</a></li>
      <li><a href="#">Bluetooth Headsets</a></li>
      <li><a href="#">Cell Phone Accessories</a></li>
      <li><a href="#">Fashion Tech</a></li>
      <li><a href="#">Headphone</a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="{{ asset('templateordering/./Megamenu_files/ele-menu-img04.jpg') }}" alt=" "></li>
      <li class="wstheading">Wearable Device</li>
      <li><a href="#">Activity Trackers </a></li>
      <li><a href="#">Sports &amp; GPS Watches</a></li>
      <li><a href="#">Smart Watches</a> <span class="wstmenutag greentag">New</span></li>
      <li><a href="#">Virtual Reality Headsets</a></li>
      <li><a href="#">Smart Tracking</a></li>
      <li><a href="#">Wearable Cameras</a></li>
      <li><a href="#">Smart Glasses</a></li>
      <li><a href="#">Kids &amp; Pets</a></li>
      <li><a href="#">Smart Sport Accessories</a></li>
  </ul>
</div>
</li>
<li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-laptop"></em>Computers &amp; Accessories</a>
  <div class="wstitemright clearfix computermenubg" style="height: auto;">
    <div class="wstmegamenucoll01 clearfix">
      <div class="wstheading">Monitors <a href="#" class="wstmorebtn">View All</a></div>
      <ul class="wstliststy03">
        <li><a href="#">50 Inches &amp; Above <span class="wstmenutag greentag">New</span></a></li>
        <li><a href="#">40 to 49.9 Inches </a></li>
        <li><a href="#">30 to 39.9 Inches</a></li>
        <li><a href="#">26 to 29.9 Inches</a></li>
        <li><a href="#">18 to 19.9 Inches</a></li>
        <li><a href="#">16 to 17.9 Inches</a></li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Printers <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">All-In-One</a> </li>
        <li><a href="#">Copying </a> <span class="wstmenutag orangetag">Exclusive</span></li>
        <li><a href="#">Faxing </a> </li>
        <li><a href="#">Printing Photo Printing</a> </li>
        <li><a href="#">Printing Only</a> </li>
        <li><a href="#">Scanning </a> </li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Software <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">Antivirus &amp; Security</a> </li>
        <li><a href="#">Business &amp; Office</a> <span class="wstmenutag orangetag">Exclusive</span></li>
        <li><a href="#">Web Design</a> </li>
        <li><a href="#">Digital Software</a> </li>
        <li><a href="#">Education &amp; Reference</a> </li>
        <li><a href="#">Lifestyle &amp; Hobbies</a> </li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Accessories <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">Audio &amp; Video Accessories</a> </li>
        <li><a href="#">Cable Security Devices</a> </li>
        <li><a href="#">Input Devices </a> </li>
        <li><a href="#">Memory Cards</a> </li>
        <li><a href="#">Monitor Accessories</a> </li>
        <li><a href="#">USB Gadgets</a> </li>
    </ul>
</div>
</div>
</li>
<li class=""><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-car"></em>Auto accessories</a>
  <div class="wstitemright clearfix wstpngsml" style="height: auto;">
    <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product1.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Interior</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product2.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Styling</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product3.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Utility</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product4.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Spare Parts</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product1.pn') }}g" alt=" "></li>
      <li class="wstheading"><a href="#">Protection</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product3.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Cleaning</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product1.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Car Audio</a></li>
  </ul>
  <ul class="wstliststy04">
      <li><img src="{{ asset('templateordering/images/product-slide/product2.png') }}" alt=" "></li>
      <li class="wstheading"><a href="#">Gear &amp; Accessories</a></li>
  </ul>
</div>
</li>
<li class="wsshoplink-active"><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-heartbeat"></em>Health Care Products</a>
  <div class="wstitemright clearfix wstpngsml" style="height: auto;">
    <div class="wstmegamenucolr03 clearfix"> <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" alt=""> </div>
    <div class="wstmegamenucoll04 clearfix">
      <ul class="wstliststy05 clearfix">
        <li><img src="{{ asset('templateordering/images/product-slide/product2.png') }}" alt=" "></li>
        <li class="wstheading">Health Care</li>
        <li><a href="#">Diabetes </a></li>
        <li><a href="#">Incontinence </a></li>
        <li><a href="#">Cough &amp; Cold</a></li>
        <li><a href="#">Baby &amp; Child Care</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Women's Health</a></li>
        <li><a href="#">First Aid</a></li>
        <li><a href="#">Smoking Cessation</a></li>
        <li><a href="#">Sleep &amp; Snoring</a></li>
    </ul>
    <ul class="wstliststy05 clearfix">
        <li><img src="{{ asset('templateordering/images/product-slide/product3.png') }}" alt=" "></li>
        <li class="wstheading">Personal Care</li>
        <li><a href="#">Shaving &amp; Hair Removal</a></li>
        <li><a href="#">Feminine Hygiene</a></li>
        <li><a href="#">Oral Care</a></li>
        <li><a href="#">Foot Care</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Hand Care</a></li>
        <li><a href="#">Personal Care Appliances</a></li>
        <li><a href="#">Shaving Foams &amp; Creams</a></li>
        <li><a href="#">Hair Removal Creams</a></li>
    </ul>
    <ul class="wstliststy05 clearfix">
        <li><img src="{{ asset('templateordering/images/product-slide/product4.png') }}" alt=" "></li>
        <li class="wstheading">Medical Equipment</li>
        <li><a href="#">Crepe Bandages, Tapes &amp; Supplies </a></li>
        <li><a href="#">Neck Supports</a></li>
        <li><a href="#">Arm Supports</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Elbow Braces</a></li>
        <li><a href="#">Knee &amp; Leg Braces</a></li>
        <li><a href="#">Ankle Braces</a></li>
        <li><a href="#">Foot Supports</a></li>
    </ul>
</div>
</div>
</li>
</ul>
</div>
</div>
</li>
<li><span class="wsmenu-click"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#" class="navtext"><span>Shop By</span> <span>Brand</span></a>
    <div class="wsshoptabing wtsbrandmenu clearfix">
      <div class="wsshoptabingwp clearfix">
        <ul class="wstabitem02 clearfix">
          <li class="wsshoplink-active"><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-apple brandcolor01" aria-hidden="true"></em>Apple</a>
            <div class="wsshoptab-active wstbrandbottom clearfix">
              <ul class="wstliststy02">
                <li class="wstheading">Apple Products </li>
                <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
                <li><a href="#">List Products 02</a></li>
                <li><a href="#">List Products 03</a></li>
                <li><a href="#">List Products 04</a> </li>
                <li><a href="#">List Products 05</a> </li>
                <li><a href="#">List Products 06</a></li>
            </ul>
            <ul class="wstliststy02">
                <li class="wstheading">Apple More Products</li>
                <li><a href="#">List Products 07 </a></li>
                <li><a href="#">List Products 08</a></li>
                <li><a href="#">List Products 09</a></li>
                <li><a href="#">List Products 10</a> </li>
                <li><a href="#">List Products 11 </a></li>
                <li><a href="#">List Products 12</a></li>
            </ul>
            <ul class="wstliststy02">
                <li class="wstheading">Apple More Products</li>
                <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
                <li><a href="#">List Products 14</a></li>
                <li><a href="#">List Products 15</a></li>
                <li><a href="#">List Products 16</a> </li>
                <li><a href="#">List Products 17</a></li>
                <li><a href="#">List Products 18</a></li>
            </ul>
            <ul class="wstliststy02">
                <li class="wstheading">Apple More Products</li>
                <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
                <li><a href="#">List Products 20</a></li>
                <li><a href="#">List Products 21</a></li>
                <li><a href="#">List Products 22</a> </li>
                <li><a href="#">List Products 23</a></li>
                <li><a href="#">List Products 24</a></li>
            </ul>
        </div>
    </li>
    <li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-windows brandcolor02" aria-hidden="true"></em> Windows</a>
        <div class="wstbrandbottom clearfix">
          <ul class="wstliststy02">
            <li class="wstheading">Windows Products </li>
            <li><a href="#">List Products 25 <span class="wstmenutag bluetag">Popular</span></a></li>
            <li><a href="#">List Products 26</a></li>
            <li><a href="#">List Products 27</a> <span class="wstmenutag greentag">20% off</span></li>
            <li><a href="#">List Products 28</a> </li>
            <li><a href="#">List Products 29</a></li>
            <li><a href="#">List Products 30</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Windows More Products</li>
            <li><a href="#">List Products 31 </a></li>
            <li><a href="#">List Products 32</a></li>
            <li><a href="#">List Products 33</a></li>
            <li><a href="#">List Products 34</a> </li>
            <li><a href="#">List Products 35 </a></li>
            <li><a href="#">List Products 36</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Windows More Products</li>
            <li><a href="#">List Products 37 </a></li>
            <li><a href="#">List Products 38</a></li>
            <li><a href="#">List Products 39</a></li>
            <li><a href="#">List Products 40</a> </li>
            <li><a href="#">List Products 41</a></li>
            <li><a href="#">List Products 42</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Windows More Products</li>
            <li><a href="#">List Products 43 </a></li>
            <li><a href="#">List Products 44</a></li>
            <li><a href="#">List Products 45</a></li>
            <li><a href="#">List Products 46</a> </li>
            <li><a href="#">List Products 47</a></li>
            <li><a href="#">List Products 48</a></li>
        </ul>
    </div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-skype brandcolor03" aria-hidden="true"></em> Skype</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Skype Products </li>
        <li><a href="#">List Products 49 </a></li>
        <li><a href="#">List Products 50</a> <span class="wstmenutag redtag">Popular</span></li>
        <li><a href="#">List Products 51</a></li>
        <li><a href="#">List Products 52</a> </li>
        <li><a href="#">List Products 53</a></li>
        <li><a href="#">List Products 54</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Skype More Products</li>
        <li><a href="#">List Products 55 </a></li>
        <li><a href="#">List Products 56</a></li>
        <li><a href="#">List Products 57</a></li>
        <li><a href="#">List Products 58</a> </li>
        <li><a href="#">List Products 59 </a></li>
        <li><a href="#">List Products 60</a> <span class="wstmenutag orangetag">20% off</span></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Skype More Products</li>
        <li><a href="#">List Products 61 </a></li>
        <li><a href="#">List Products 62</a></li>
        <li><a href="#">List Products 63</a></li>
        <li><a href="#">List Products 64</a> </li>
        <li><a href="#">List Products 65</a></li>
        <li><a href="#">List Products 66</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Skype More Products</li>
        <li><a href="#">List Products 67 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
        <li><a href="#">List Products 68</a></li>
        <li><a href="#">List Products 69</a></li>
        <li><a href="#">List Products 70</a> </li>
        <li><a href="#">List Products 71</a></li>
        <li><a href="#">List Products 72</a></li>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-paypal brandcolor04" aria-hidden="true"></em>Paypal</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Paypal Products </li>
        <li><a href="#">List Products 73 <span class="wstmenutag bluetag">Popular</span></a></li>
        <li><a href="#">List Products 74</a></li>
        <li><a href="#">List Products 75</a></li>
        <li><a href="#">List Products 76</a> </li>
        <li><a href="#">List Products 77</a></li>
        <li><a href="#">List Products 78</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Paypal More Products</li>
        <li><a href="#">List Products 79 </a></li>
        <li><a href="#">List Products 80</a></li>
        <li><a href="#">List Products 81</a></li>
        <li><a href="#">List Products 82</a> </li>
        <li><a href="#">List Products 83 <span class="wstmenutag greentag">20% off</span></a></li>
        <li><a href="#">List Products 84</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Paypal More Products</li>
        <li><a href="#">List Products 85 </a></li>
        <li><a href="#">List Products 86</a></li>
        <li><a href="#">List Products 87</a></li>
        <li><a href="#">List Products 89</a> </li>
        <li><a href="#">List Products 90</a></li>
        <li><a href="#">List Products 91</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Paypal More Products</li>
        <li><a href="#">List Products 92 </a></li>
        <li><a href="#">List Products 93</a></li>
        <li><a href="#">List Products 94</a></li>
        <li><a href="#">List Products 95</a> </li>
        <li><a href="#">List Products 96</a></li>
        <li><a href="#">List Products 97</a></li>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-quora brandcolor05" aria-hidden="true"></em>Quora</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Amazon Products </li>
        <li><a href="#">List Products 98 </a></li>
        <li><a href="#">List Products 99</a></li>
        <li><a href="#">List Products 00</a></li>
        <li><a href="#">List Products 01</a> </li>
        <li><a href="#">List Products 02</a> <span class="wstmenutag redtag">Popular</span></li>
        <li><a href="#">List Products 03</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Amazon More Products</li>
        <li><a href="#">List Products 04 <span class="wstmenutag orangetag">20% off</span></a></li>
        <li><a href="#">List Products 05</a></li>
        <li><a href="#">List Products 06</a></li>
        <li><a href="#">List Products 07</a> </li>
        <li><a href="#">List Products 08 </a></li>
        <li><a href="#">List Products 09</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Amazon More Products</li>
        <li><a href="#">List Products 10 </a></li>
        <li><a href="#">List Products 11</a></li>
        <li><a href="#">List Products 12</a></li>
        <li><a href="#">List Products 13</a> </li>
        <li><a href="#">List Products 14</a></li>
        <li><a href="#">List Products 15</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Amazon More Products</li>
        <li><a href="#">List Products 16 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
        <li><a href="#">List Products 17</a></li>
        <li><a href="#">List Products 18</a></li>
        <li><a href="#">List Products 19</a> </li>
        <li><a href="#">List Products 20</a></li>
        <li><a href="#">List Products 21</a></li>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-soundcloud brandcolor06"></em>Sound Cloud</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">SoundCloud Products </li>
        <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a> </li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">SoundCloud More Products</li>
        <li><a href="#">List Products 07 </a></li>
        <li><a href="#">List Products 08</a></li>
        <li><a href="#">List Products 09</a></li>
        <li><a href="#">List Products 10</a> </li>
        <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
        <li><a href="#">List Products 12</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">SoundCloud More Products</li>
        <li><a href="#">List Products 13 </a></li>
        <li><a href="#">List Products 14</a></li>
        <li><a href="#">List Products 15</a></li>
        <li><a href="#">List Products 16</a> </li>
        <li><a href="#">List Products 17</a></li>
        <li><a href="#">List Products 18</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">SoundCloud More Products</li>
        <li><a href="#">List Products 19 </a></li>
        <li><a href="#">List Products 20</a></li>
        <li><a href="#">List Products 21</a></li>
        <li><a href="#">List Products 22</a> </li>
        <li><a href="#">List Products 23</a></li>
        <li><a href="#">List Products 24</a></li>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-houzz brandcolor07"></em>Houzz</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Houzz Products </li>
        <li><a href="#">List Products 01 </a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a> </li>
        <li><a href="#">List Products 01</a> <span class="wstmenutag redtag">Popular</span></li>
        <li><a href="#">List Products 01</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Houzz More Products</li>
        <li><a href="#">List Products 07 <span class="wstmenutag orangetag">20% off</span></a></li>
        <li><a href="#">List Products 08</a></li>
        <li><a href="#">List Products 09</a></li>
        <li><a href="#">List Products 10</a> </li>
        <li><a href="#">List Products 11 </a></li>
        <li><a href="#">List Products 12</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Houzz More Products</li>
        <li><a href="#">List Products 13 </a></li>
        <li><a href="#">List Products 14</a></li>
        <li><a href="#">List Products 15</a></li>
        <li><a href="#">List Products 16</a> </li>
        <li><a href="#">List Products 17</a></li>
        <li><a href="#">List Products 18</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Houzz More Products</li>
        <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
        <li><a href="#">List Products 20</a></li>
        <li><a href="#">List Products 21</a></li>
        <li><a href="#">List Products 22</a> </li>
        <li><a href="#">List Products 23</a></li>
        <li><a href="#">List Products 24</a></li>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#"><em class="fa fa-get-pocket brandcolor08"></em>Get Pocket</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Get Pocket Products </li>
        <li><a href="#">List Products 01 <span class="wstmenutag bluetag">Popular</span></a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a> </li>
        <li><a href="#">List Products 01</a></li>
        <li><a href="#">List Products 01</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Get Pocket More Products</li>
        <li><a href="#">List Products 07 </a></li>
        <li><a href="#">List Products 08</a></li>
        <li><a href="#">List Products 09</a></li>
        <li><a href="#">List Products 10</a> </li>
        <li><a href="#">List Products 11 <span class="wstmenutag greentag">20% off</span></a></li>
        <li><a href="#">List Products 12</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Get Pocket More Products</li>
        <li><a href="#">List Products 13 </a></li>
        <li><a href="#">List Products 14</a></li>
        <li><a href="#">List Products 15</a></li>
        <li><a href="#">List Products 16</a> </li>
        <li><a href="#">List Products 17</a></li>
        <li><a href="#">List Products 18</a></li>
    </ul>
    <ul class="wstliststy02">
        <li class="wstheading">Get Pocket More Products</li>
        <li><a href="#">List Products 19 </a></li>
        <li><a href="#">List Products 20</a></li>
        <li><a href="#">List Products 21</a></li>
        <li><a href="#">List Products 22</a> </li>
        <li><a href="#">List Products 23</a></li>
        <li><a href="#">List Products 24</a></li>
    </ul>
</div>
</li>
</ul>
</div>
</div>
</li>

<li><span class="wsmenu-click"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#" class="navtext"><span>Shop By</span> <span>MegaMenu</span></a>
    <div class="megamenu clearfix">


        <ul class="wstliststy02">
            <li class="wstheading"> Skype Products </li>
            <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
            <li><a href="#">List Products 02</a></li>
            <li><a href="#">List Products 03</a></li>
            <li><a href="#">List Products 04</a> </li>
            <li><a href="#">List Products 05</a> </li>
            <li><a href="#">List Products 06</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Paypal Products</li>
            <li><a href="#">List Products 07 </a></li>
            <li><a href="#">List Products 08</a></li>
            <li><a href="#">List Products 09</a></li>
            <li><a href="#">List Products 10</a> </li>
            <li><a href="#">List Products 11 </a></li>
            <li><a href="#">List Products 12</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Sound Cloud Products</li>
            <li><a href="#">List Products 13 </a> <span class="wstmenutag orangetag">20% off</span></li>
            <li><a href="#">List Products 14</a></li>
            <li><a href="#">List Products 15</a></li>
            <li><a href="#">List Products 16</a> </li>
            <li><a href="#">List Products 17</a></li>
            <li><a href="#">List Products 18</a></li>
        </ul>
        <ul class="wstliststy02">
            <li class="wstheading">Get Pocket Products</li>
            <li><a href="#">List Products 19 </a> <span class="wstmenutag bluetag">Winter Offer</span></li>
            <li><a href="#">List Products 20</a></li>
            <li><a href="#">List Products 21</a></li>
            <li><a href="#">List Products 22</a> </li>
            <li><a href="#">List Products 23</a></li>
            <li><a href="#">List Products 24</a></li>
        </ul>


    </div>
</li>


<li><span class="wsmenu-click"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#" class="navtext"><span>Shop By</span> <span>Half menu</span></a>
    <div class="megamenu clearfix halfmenu">


        <ul class="wstliststy06">
            <li class="wstheading">Windows Products</li>
            <li><a href="#">List Products 01 </a> <span class="wstmenutag redtag">Popular</span></li>
            <li><a href="#">List Products 02</a></li>
            <li><a href="#">List Products 03</a></li>
            <li><a href="#">List Products 04</a> </li>
            <li><a href="#">List Products 05</a> </li>
            <li><a href="#">List Products 06</a></li>
        </ul>
        <ul class="wstliststy06">
            <li class="wstheading">Apple More Products</li>
            <li><a href="#">List Products 07 </a></li>
            <li><a href="#">List Products 08</a></li>
            <li><a href="#">List Products 09</a></li>
            <li><a href="#">List Products 10</a> </li>
            <li><a href="#">List Products 11 </a></li>
            <li><a href="#">List Products 12</a></li>
        </ul>




    </div>
</li>


<li class="wssearchbar clearfix">
    <form class="topmenusearch">
      <input placeholder="Search Product By Name, Category...">
      <button class="btnstyle"><em class="searchicon fa fa-search" aria-hidden="true"></em></button>
  </form>
</li>



<li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><em class="wsmenu-arrow fa fa-angle-down"></em></span><a href="#" class="wtxaccountlink"><em class="fa fa-align-justify"></em>My Account <em class="fa  fa-angle-down"></em></a>
    <ul class="wsmenu-submenu">
      <li><a href="account.html"><em class="fa fa-user"></em>View Profile</a></li>
      <li><a href="register.html"><em class="fa fa-black-tie"></em>Sign Up</a></li>
      <li><a href="login.html"><em class="fa fa-sign-in"></em>Login</a></li>
      <li><a href="account.html#wishlist"><em class="fa fa-heart"></em>My Wishlist</a></li>
      <li><a href="faq.html"><em class="fa fa-question-circle"></em>Help Center</a></li>
      <li><a href="login.html"><em class="fa fa-sign-out"></em>Logout</a></li>
  </ul>
</li>
</ul>
</nav>
</div>
<!--Menu HTML Code--> 

</div>
</div>

</div>  <!-- End Navigation header -->

</div>
<!-- Header part  -->


<div class="content-area">
    <div class="main-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('templateordering/images/slider/slider1.jpg') }}" alt="Chania">
                <div class="carousel-caption">
                    <div class="slide-header-text wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
                    <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
                </div>
            </div>

            <div class="item">
              <img src="{{ asset('templateordering/images/slider/slider2.jpg') }}" alt="Chania">
              <div class="carousel-caption">
                <div class="slide-header-text wow rotateIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Turn your looking into an easy price</div> <br />
                <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this from your limit</a>
            </div>
        </div>

        <div class="item">
          <img src="{{ asset('templateordering/images/slider/slider3.jpg') }}" alt="Flower">
          <div class="carousel-caption">
           <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">A place of all electronics products</div> <br />
           <a href="products.html" class="btn btn-red slider-link wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">View Our All Products</a>
       </div>
   </div>

   <div class="item">
      <img src="{{ asset('templateordering/images/slider/slider4.jpg') }}" alt="Flower">
      <div class="carousel-caption">
          <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
      </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>

</a>

<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

</div>
</div> <!-- End Main slider class -->


<div class="featured-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft pull-left" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Top Featured products</h2><div class="clear"></div>
        <div class="featured-navigation pull-right">
            <span class="">
                <a class="owl-prev owl-navigaiton"><em class="fa fa-angle-double-right"></em></a>
            </span>
            <span class="stop">
                <a class="owl-next owl-navigaiton">||</a>
            </span>
            <span class="">
                <a class="owl-next owl-navigaiton"><em class="fa fa-angle-double-left"></em></a>
            </span>
            
        </div>
        <div class="clear"></div>
        <div class="featured-items">
            <!-- Set up your HTML -->
            <div class="owl-carousel">

                <div class="item featured1">
                    <div class="item-full animated featured1-inner  width0">
                        <a href="products.html"><h4>Digital Camera</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        <h5>200$</h5>
                        <a href="cart.html" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="products.html">
                        <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->            
                
                <div class="item featured2">
                    <div class="item-full animated featured2-inner  width0">
                        <a href="products.html"><h4>Digital Camera</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        <h5>200$</h5>
                        <a href="cart.html" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="products.html">
                        <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->                
                
                <div class="item featured3">
                    <div class="item-full animated featured3-inner  width0">
                        <a href="products.html"><h4>Digital Camera</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        <h5>200$</h5>
                        <a href="cart.html" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="products.html">
                        <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->                
                
                <div class="item featured4">
                    <div class="item-full animated featured4-inner  width0">
                        <a href="products.html"><h4>Digital Camera</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        <h5>200$</h5>
                        <a href="cart.html" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="products.html">
                        <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->                
                
                <div class="item featured5">
                    <div class="item-full animated featured5-inner  width0">
                        <a href="products.html"><h4>Digital Camera</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        <h5>200$</h5>
                        <a href="cart.html" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="products.html">
                        <img src="{{ asset('templateordering/images/product-slide/product4.png') }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->


                
                
            </div>
        </div>
    </div>
</div> <!--End Featured products Div-->


<div class="latest-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
        <div class="products">
            <div class="row">

                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->  
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive" alt="product2/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->  
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->  
                
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product4.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->                 
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->                 
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product4.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->                 
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->                 
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <em class="fa fa-cart-plus"></em>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] --> 

                <div class="clearfix"></div>

                



            </div> <!-- End Latest products row-->
            <a href="products.html" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                <span>See More products.. </span>
            </a>
            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div>  <!-- End Latest products -->

<div class="services-area">
    <div class="services">
        <div class="container">
            <div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <em class="fa fa-truck" aria-hidden="true"></em>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>FREE DELIVERY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div> 
                <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <em class="fa fa-user" aria-hidden="true"></em>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>CUSTOMER CARE</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="ftr-top-left pull-left">
                        <em class="fa fa-thumbs-o-up" aria-hidden="true"></em>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>GOOD QUALITY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div> <!-- End Service -->

</div> <!-- End content Area class -->


<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-top-address wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="header-logo" style=" text-align: center;border-bottom: 1px dotted rgba(247, 12, 38, 0.24);">
                        <a href="index.html">
                            <img src="{{ asset('templateordering/images/logo.png') }}" alt="Your Shop Logo" class="img img-responsive" style="max-width: 100px">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <ul>
                        <li><em class="fa fa-map-marker"></em> Patuakhali Science & Technology University, Dumki-8602, Patuakhali</li>
                        <li><em class="fa fa-mobile"></em> +8801951233084 </li>
                        <li><em class="fa fa-phone"></em> +222 11 4444 </li>
                        <li><em class="fa fa-envelope-o"></em> <a href="mailto:manirujjamanakash@gmail.com"> manirujjamanakash@gmail.com</a></li>
                    </ul> 
                </div>
                

            </div>
            <div class="col-md-8">
                <div class="subscribe wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <h3>Subscribe here to get some exciting offers</h3>
                    <form action="#" method="post"> 
                        <input type="text" name="email" placeholder="Enter your Email..." required="">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="all-footer-links">
                    <div class="col-md-4">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="login.html">Returns</a></li> 
                            <li><a href="faq.html" class="link">FAQ</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="login.html">Order Status</a></li>
                        </ul> 
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>Payment Methods</h3>
                        <ul>
                            <li><em class="fa fa-paypal" aria-hidden="true"></em> Paypal</li>
                            <li><em class="fa fa-money" aria-hidden="true"></em> Bkash</li>
                            <li><em class="fa fa-pie-chart" aria-hidden="true"></em>EMI Conversion</li>
                            <li><em class="fa fa-gift" aria-hidden="true"></em> E-Gift Voucher</li>
                            <li><em class="fa fa-credit-card" aria-hidden="true"></em> Debit/Credit Card</li>
                        </ul>  
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="payment-links">
                    <ul>
                        <li><em class="fa fa-cc-paypal" style="color: #FFCC80"></em></li>
                        <li><em class="fa fa-cc-mastercard" style="color: #FFEB3B"></em></li>
                        <li><em class="fa fa-cc-stripe" style="color: yellow"></em></li>
                        <li><em class="fa fa-credit-card" style="color: #FF9800"></em></li>
                    </ul>
                </div>
            </div>
        </div>
        


    </div>
</div> <!-- End Footer top -->

<div class="footer-bottom">
    <p class="footer-credit">
        &copy;<script type="text/javascript">document.write(new Date().getFullYear())</script> - All rights reserved <a href="index.html">Your shop</a> | Designed by <a href="https://maniruzzaman-akash.blogspot.com"> Maniruzzaman Akash </a>
    </p>
</div> <!--End Footer bottom -->

<div class="scroll">
    <a href="#top" class="scroll-to-top hidden">
        <em class="fa fa-chevron-up"></em>
    </a>
</div>


</div> <!-- End wrapper -->



<!-- Scripts -->
<script type="text/javascript" src="{{ asset('templateordering/js/jquery.min.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // alert('test message');

        // var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;
        // var contact1 = "01951233084";
        // var contact2 = "+8801951233084";
        // alert(bd_phone_pattern.test(contact1));
        // if (bd_phone_pattern.test(contact1)) {
        //     alert('Regexp Has Matched');
        // }else{
        //     alert('Regexp Hasn\'t Matched');
        // }
    });
</script>



<script type="text/javascript" src="{{ asset('templateordering/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('templateordering/js/wow.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('templateordering/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templateordering/js/webslidemenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('templateordering/js/main.js') }}"></script>
</body>
</html>