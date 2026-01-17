<div class="container-fluid d-block d-lg-none" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <div class="navbar-translate d-flex justify-content-between w-100 fixed-top">
        <a href="/luxury-service-apartments-in-lagos" class="navbar-brand" itemprop="url">
            <div class="logo-small">
                <img src="/images/logo/Central_Avenue_Main_Logo_1_-_Copy-removebg-preview.png" alt="" itemprop="logo" srcset="">
            </div>
        </a>
        <div class="d-flex justify-content-center align-items-center">
            @guest
            <a href="/login" class="d-none d-lg-block text-white bold-2 mr-4" itemprop="url">Login</a>
            @endguest
            @auth
            <a href="/account" class="d-none d-lg-block text-white bold-2 mr-4" itemprop="url">Account</a>
            @endauth
            @if ( auth()->check() && auth()->user()->isAdmin() )
            @if(isset($show_book) && !$show_book)
            <div id="currencyDropdown" class="dropdown">
                <button class="btn bold-2 btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                    ({{ session('switch') !== null ?  session('switch') : 'NGN' }}) Currency
                </button>
                <div class="dropdown-menu bg-white">
                    <a class="dropdown-item my-1 px-0 border-bottom" href="?currency=USD">(USD) United States Dollar</a>
                    <a class="dropdown-item my-1 px-0 border-bottom" href="?currency=NGN">(NGN) Nigerian Naira</a>
                </div>
            </div>
            @endif
            @endif

            @if(isset($show_book) && $show_book)
            <a href="/apartments" class="align-self-center mr-3 d-none d-lg-block font-weight-bold btn-primary bold-3 btn text-white" itemprop="url">Book Now</a>
            @endif
            <button class="navbar-toggler d-block text-white border-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon text-white"></span>
                <span class="navbar-toggler-icon text-white"></span>
                <span class="navbar-toggler-icon text-white"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-center w-100 mt-5" itemscope itemtype="https://schema.org/ItemList">
            <li class="w-100 py-3 font-weight-bold" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/Apartments" itemprop="url"><span itemprop="name">Apartments</span></a>
            </li>

            <li class="w-100 font-weight-bold" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/About-us" itemprop="url"><span itemprop="name">About us</span></a>
            </li>

            <li class="w-100 py-3 font-weight-bold" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/contact-us" itemprop="url"><span itemprop="name">Contact us</span></a>
            </li>


            <li class="w-100 font-weight-bold" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/login" itemprop="url"><span itemprop="name">Login</span></a>
            </li>
        </ul>
    </div>
</div>
@include('_partials.svg')