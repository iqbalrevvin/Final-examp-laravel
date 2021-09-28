
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
                <img src="{{ asset('images/restoran.png') }}" alt="Chania" width="100%">
                <div class="carousel-caption">
                    <div class="slide-header-text wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
                    <a href="{{ ('products') }}" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
                </div>
            </div>

            <div class="item">
              <img src="{{ asset('images/restoran2.jpg') }}" alt="Chania" width="100%">
              <div class="carousel-caption">
                <div class="slide-header-text wow rotateIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Turn your looking into an easy price</div> <br />
                <a href="{{ ('products') }}" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this from your limit</a>
            </div>
        </div>

        <div class="item">
          <img src="{{ asset('images/restoran3.jpg') }}" alt="Flower" width="100%">
          <div class="carousel-caption">
           <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">A place of all electronics products</div> <br />
           <a href="{{ ('products') }}" class="btn btn-red slider-link wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">View Our All Products</a>
       </div>
   </div>

   <div class="item">
      <img src="{{ asset('images/restoran4.jpg') }}" alt="Flower" width="100%">
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
</div>