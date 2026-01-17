@inject('helper', 'App\Http\Helper')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />



@include('_partials.header_styles')

<body>
   <div id="app" class="app">

      <nav class="navbar  navbar-fixed-top navbar-expand-lg  navbar-transparent navbar-absolute" color-on-scroll="100" id="sectionsNav">

         <div class="mx-auto w-100 d-none d-lg-block">
            <div class="logo border-bottom">
               <div class="d-flex justify-content-center">
                  <a href="/" class="href d-inline-block cursor-pointer">
                     <img height="60" width="60" src="/images/logo/Central_Avenue_Main_Logo_1_-_Copy-removebg-preview.png" alt="" srcset="">
                  </a>
               </div>
               <small class="d-flex justify-content-center text-white">Best apartments</small>

            </div>


            <ul class="d-flex justify-content-center list-unstyled text-white">
               <li class="nav-item"><a class="nav-link bold-2 text-white" href="#">APARTMENTS</a></li>
               <li class="nav-item"><a class="nav-link bold-2 text-white" href="#">ABOUT US</a></li>
               <li class="nav-item"><a class="nav-link  bold-2 text-white" href="#">CONTANT US</a></li>
               <li class="nav-item"><a class="nav-link  bold-2 text-white" href="#">GALLERY</a></li>
            </ul>
         </div>
         @include('_partials.header', ['show_logo' => true, 'show_book' => true])
      </nav>
      <div id="content" class="main  index-page">
         @yield('content')
      </div>
      @include('_partials.footer')
      </footer>
   </div>



   @include('_partials.modal')


   <div class="watsapp pt-3">
      <a class="chat-on-watsapp bold-2" target="_blank" href="https://wa.me/{{ optional($system_settings)->store_phone }}">
         Any questions? Chat with us
         <i class="fab fa-whatsapp fa-2x float-right mr-2"></i></a>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

   <script src="/js/services_js.js?version={{ str_random(6) }}"></script>

   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>



   @yield('page-scripts')
   <script type="text/javascript">
      @yield('inline-scripts')
      jQuery(function() {

      });
   </script>

</body>

</html>