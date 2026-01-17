@extends('layouts.app')
@section('content')


<div class="video-section">
   <div title="Luxury apartments" class="intro-image">
      <index-search :peak_period="{{$peak_period}}" />
   </div>

   <div title="Luxury apartments" class="intro-image down-arrow ">
      <div class="elementor-widget-container  position-absolute  text-center" bis_skin_checked="1">
         <a href="#cor-below-fold" class=" inline-block" bis_skin_checked=" 1">
            <img decoding="async" src="/img/Asset-2.svg" class="attachment-full down-arrow-img size-full wp-image-136" alt="">
         </a>
      </div>
   </div>



   <div class="w-100" id="main-banner position-relative">
      <div class=" header-filter video-hero">
         <video class="hero-video"
            autoplay
            muted
            loop
            playsinline>
            <source src="/video/banners/thecentralavenue.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>
   </div>
</div>



<div class="search-header d-block   p-3">
   <!-- <search-apartments :peak_period="{{$peak_period}}" /> -->
</div>






<div id="cor-below-fold" class="container-fluid mb-2">
   <div class="row">

      <div class="col-md-12">
         <section id="rbox1">
            <div class="row position-relative" itemscope itemtype="https://schema.org/Thing">

               <div class="col-lg-4 col-md-12 welcome text-left d-flex justify-content-center align-items-center" itemprop="description">
                  <div class=" p-sm-3 p-md-5">
                     <div class="primary-color text-gold">The Central Avenue</div>
                     <h2 class="bold-2">Our Apartments</h2>
                     <p class="mt-4 text-left text-black light-bold">
                        Our Apartments are thoughtfully designed to offer the comfort of home with the sophistication of luxury living. Each space is elegantly furnished, blending contemporary design with timeless finishes to create an atmosphere of effortless refinement.

                     </p>
                     <div class="buttons">
                        <a href="/apartments" class="c-button c-button--underline c-button--sm text-gold">
                           View all Apartments
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-8 col-md-12 rounded card-background-image" itemprop="image">
                  <div id="c1" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img title="STAY IN THE HEART OF LAGOS Avenue montaigne" src="/images/banners/IMG-20251019-WA0048.jpg" data-image="/images/banners/IMG-20251019-WA0048.jpg" itemprop="image" class="d-block w-100  image-class" alt="STAY IN THE HEART OF LAGOS avenue montaigne">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>


<div class="ap mb-3">
   <div class="container-fluid">


      <div class="title">
         <div class="d-flex justify-content-between">
            <h2 class="large-heading bold" itemprop="name">Trending
               <div class="underline"></div>

            </h2>
         </div>
      </div>
      <div class="row p-1">
         <div id="load-products" class="col-md-12" itemscope itemtype="https://schema.org/ItemList">
            <apartments-index :isIndex="1" :peak_period="{{$peak_period}}" :isGallery="0" :filter="0" :property="{{$property}}" :apartments="{{ $apartments }}" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" />
         </div>
      </div>
   </div>
</div>



<div class="container-fluid ">
   <div style="background-image: url('/images/banners/flowers.png');
        background-position: center right;
    background-repeat: no-repeat;
    background-size: contain;" class="row gray-bg position-relative  pb-5 pt-5">

      <section class="container-fluid mb-5">
         <div class="row">
            <div class="col-md-6">
               <div class="feature-card">
                  <img src="/images/banners/IMG-20251019-WA0052.jpg" class="feature-img img-fluid" alt="Luxury Suite">
                  <div class="feature-content mt-2">
                     <span class="feature-label text-gold">Multiple locations</span>
                     <h2 class="">Sophisticated Sanctuaries</h2>
                     <p class="text-muted small">Experience luxury living across multiple prime locations on Central Avenue. Our apartments are thoughtfully positioned to offer convenience, comfort, and seamless access to business districts, dining, and lifestyle attractions. Wherever you stay, enjoy the same refined standards, elegant interiors, and exceptional hospitality</p>
                     <a href="/apartments" class="c-button c-button--underline c-button--sm text-gold">
                        View all Apartments
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="feature-card">
                  <img src="/images/banners/IMG-20251019-WA0060-1.jpg" class="feature-img img-fluid" alt="Luxury Suite">

                  <div class="feature-content mt-2">
                     <span class="feature-label text-gold">Outdoor</span>
                     <h2>Premium / Lifestyle</h2>
                     <p class="text-muted small">Enjoy thoughtfully designed outdoor spaces that invite relaxation and fresh air. From serene balconies to open-air lounging areas, our apartments offer the perfect balance between indoor comfort and outdoor living.</p>
                     <a href="/apartments" class="c-button c-button--underline c-button--sm text-gold">
                        View all Apartments
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>








   @endsection
   @section('inline-scripts')

   document.addEventListener("DOMContentLoaded", function() {
   var bgImages = document.querySelectorAll('.bg-image-class');
   bgImages.forEach(function(element) {
   var dataBgImage = element.getAttribute('data-bg-image');
   if (dataBgImage) {
   element.style.backgroundImage = 'url(' + dataBgImage + ')';
   }
   });
   });

   document.addEventListener("DOMContentLoaded", function() {
   var images = document.querySelectorAll('.image-class');
   images.forEach(function(image) {
   var dataImage = image.getAttribute('data-image');
   if (dataImage) {
   image.setAttribute('src', dataImage);
   }
   });
   });






   jQuery(function () {



   // Add touch event listeners to centered images
   $(".intro-image").on("touchstart", function(event){
   // Record the initial touch position
   var startX = event.touches[0].clientX;

   // Add touch move event listener
   $(this).on("touchmove", function(event){
   // Calculate the distance moved
   var moveX = event.touches[0].clientX - startX;

   // If the distance moved is greater than a threshold, trigger carousel swipe
   if(Math.abs(moveX) > 50){ // Adjust threshold as needed
   if(moveX > 0){
   // Swipe right
   $(".owl-carousel").trigger("prev.owl.carousel");
   } else {
   // Swipe left
   $(".owl-carousel").trigger("next.owl.carousel");
   }

   // Remove touchmove event listener to prevent multiple triggers
   $(this).off("touchmove");
   }
   });

   // Add touchend event listener to clean up
   $(this).on("touchend", function(){
   // Remove touchmove event listener
   $(this).off("touchmove");
   });
   });
   console.log(true)
   });
   @stop