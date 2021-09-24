<!DOCTYPE html>
<html>
<head>
    @include('ordering.header')
</head>
<body>
  @include('ordering.navbar')
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
                    <a href="{{ ('products') }}" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
                </div>
            </div>

            <div class="item">
              <img src="{{ asset('templateordering/images/slider/slider2.jpg') }}" alt="Chania">
              <div class="carousel-caption">
                <div class="slide-header-text wow rotateIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Turn your looking into an easy price</div> <br />
                <a href="{{ ('products') }}" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this from your limit</a>
            </div>
        </div>

        <div class="item">
          <img src="{{ asset('templateordering/images/slider/slider3.jpg') }}" alt="Flower">
          <div class="carousel-caption">
           <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">A place of all electronics products</div> <br />
           <a href="{{ ('products') }}" class="btn btn-red slider-link wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">View Our All Products</a>
       </div>
   </div>

   <div class="item">
      <img src="{{ asset('templateordering/images/slider/slider4.jpg') }}" alt="Flower">
      <div class="carousel-caption">
          <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
          <a href="{{ ('products') }}" class="btn btn-red slider-link wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
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
                            <a href="{{ ('product_single') }}">
                                <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="{{ ('product_single') }}">DSLR Camera</a><br />
                                <span class="prev-price">
                                    <del>200$</del>
                                </span>
                                <span class="current-price">
                                    150$
                                </span>
                            </div>

                            <a href="{{ ('cart') }}"  class="btn btn-cart text-center add-to-cart pull-right">
                                <i class="fa fa-cart-plus"></i>
                                Simpan
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->  
                
                <div class="clearfix"></div>
            </div> <!-- End Latest products row-->
            <a href="{{ ('products') }}" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
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