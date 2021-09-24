@extends('ordering.app')
@section('carousel')
    @include('ordering.carousel')
@endsection

@section('produk')
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
</div> 
@endsection