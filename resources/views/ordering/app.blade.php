<!DOCTYPE html>
<html>
<head>
    @include('ordering.header')
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        @include('ordering.navbar')
    </div>
    <!-- End Header Main, logo, search bar,cart -->
    <div class="header-navigation">
        <div class="wsmenucontainer clearfix">
          <div class="overlapblackbg"></div>
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="{{ asset('templateordering/images/logo.png') }}" alt=""></a></div>


          <div class="headerfull"> 
            <!--Main Menu HTML Code-->
            <div class="wsmain">
              <!-- <div class="smllogo"><a href="#"><img src="images/logo.jpg" alt=""></a></div> -->
              <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">
                  <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Department</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                      <div class="wsshopwp clearfix" style="height: 421px;">
                          <ul class="wstabitem clearfix">
                            <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-male"></i> Women's Clothing &amp; Accessories</a>
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
                                <div class="cl" style="height:8px;"></div>
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
                                    <div class="item"> <a href="#"><img src="{{ asset('templateordering/./Megamenu_files/woman-ad-img.jpg') }}" alt=""></a>
                                      <div class="carousel-caption">
                                        <h3>First slide label</h3>
                                    </div>
                                </div>
                                <div class="item active"> <a href="#"><img src="{{ asset('templateordering/./Megamenu_files/woman-ad-img02.jpg') }}" alt=""></a>
                                  <div class="carousel-caption">
                                    <h3>Second slide label</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Controls --> 
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
                    </div>
                </div>
            </div>
        </li>
        <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-female"></i> Men's Clothing &amp; Accessories</a>
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
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-play-circle"></i> Movies, Music &amp; Games</a>
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
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-cutlery"></i>Home &amp; Kitchen</a>
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
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-television"></i>Electronics Appliances</a>
  <div class="wstitemright clearfix" style="height: auto;">
    <ul class="wstliststy02">
      <li><img src="{{ asset('templateordering/./Megamenu_files/ele-menu-img01.jpg') }}" alt=" "></li>
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
  
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-laptop"></i>Computers &amp; Accessories</a>
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
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-car"></i>Auto accessories</a>
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
      <li><img src="{{ asset('templateordering/images/product-slide/product1.png') }}" alt=" "></li>
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
<li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-heartbeat"></i>Health Care Products</a>
  <div class="wstitemright clearfix wstpngsml" style="height: auto;">
    <div class="wstmegamenucolr03 clearfix"> <img src="x" alt=""> </div>
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
<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Brand</span></a>
    <div class="wsshoptabing wtsbrandmenu clearfix">
      <div class="wsshoptabingwp clearfix">
        <ul class="wstabitem02 clearfix">
          <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-apple brandcolor01" aria-hidden="true"></i>Apple</a>
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
            
        </div>
    </li>
    <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-windows brandcolor02" aria-hidden="true"></i> Windows</a>
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
        
    </div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-skype brandcolor03" aria-hidden="true"></i> Skype</a>
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
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-paypal brandcolor04" aria-hidden="true"></i>Paypal</a>
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
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-quora brandcolor05" aria-hidden="true"></i>Quora</a>
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
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-soundcloud brandcolor06"></i>Sound Cloud</a>
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
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-houzz brandcolor07"></i>Houzz</a>
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
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-get-pocket brandcolor08"></i>Get Pocket</a>
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
</div>
</li>
</ul>
</div>
</div>
</li>

<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>MegaMenu</span></a>
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


<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Half menu</span></a>
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

<!-- <li class="wscarticon clearfix"> <a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li> -->


<li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="wtxaccountlink"><i class="fa fa-align-justify"></i>My Account <i class="fa  fa-angle-down"></i></a>
    <ul class="wsmenu-submenu">
      <li><a href="account.html"><i class="fa fa-user"></i>View Profile</a></li>
      <li><a href="register.html"><i class="fa fa-black-tie"></i>Sign Up</a></li>
      <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
      <li><a href="account.html#wishlist"><i class="fa fa-heart"></i>My Wishlist</a></li>
      <li><a href="faq.html"><i class="fa fa-question-circle"></i>Help Center</a></li>
      <li><a href="login.html"><i class="fa fa-sign-out"></i>Logout</a></li>
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

<div class="latest-products">
    <div class="container">
      
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
                                <i class="fa fa-cart-plus"></i>
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
</div> <!-- End content Area class -->
@include('ordering.footer')
</body>
</html>