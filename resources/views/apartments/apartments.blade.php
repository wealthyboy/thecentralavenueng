@extends('layouts.checkout')
@section('content')

<div class="container">



    <div class="row">
        @if (!$apartments)
        <div id="load-products" class="col-md-10 ">
            <div class="no-properties-found">
                <div class="text-center">
                    <i class="fas fa-home fa-5x"></i>
                    <p>We could not match any apartments to your search</p>
                </div>
            </div>
        </div>
        @else

        <div id="load-products-2" class="col-md-12">
            <apartments-index :peak_period="{{$peak_period}}" :isGallery="[]" :filter="1" :showResult="{{$apr}}" :apr="{{$apr}}" :property="{{$property}}" :apartments="{{ $apartments }}" />
        </div>
        @endif



    </div>
</div>

<div style="height: 50px;"></div>

@endsection
@section('inline-scripts')
jQuery(function () {
$(".owl-carousel").owlCarousel({
margin: 10,
nav: true,
dots: false,
responsive: {
0: {
items: 1,
},
600: {
items: 1,
},
1000: {
items: 1,
},
},
});
});
@stop