<div class="container-fluid" itemscope itemtype="https://schema.org/SiteNavigationElement">

    <div class="navbar-translate d-flex justify-content-between w-100 fixed-top">
        <a href="/luxury-service-apartments-in-lagos" class="navbar-brand" itemprop="url">
            <div class="logo-small" itemprop="name">
                <img src="/images/logo/Central_Avenue_Main_Logo_1_-_Copy-removebg-preview.png" alt="The Central Avenue" itemprop="logo">
                @if(isset($show_logo) && $show_logo)
                @else
                @endif
            </div>
        </a>

        <div class="d-flex">
            <a href="/Apartments" class="align-self-center text-white bold font-weight-bold px-3 py-1 mr-2" itemprop="url">
                Apartments
            </a>
            <a href="/pages/about-us" class="align-self-center text-white bold font-weight-bold px-3 py-1 mr-2" itemprop="url">
                About us
            </a>
            <a href="/pages/contact-us" class="align-self-center text-white bold  px-3 py-1 mr-2" itemprop="url">
                Contact us
            </a>

            @guest
            <a href="/login" class="align-self-center text-white bold font-weight-bold px-3 py-1 mr-2" itemprop="url">
                Login
            </a>
            @endguest

            @auth
            <a href="/account" class="align-self-center bold text-white font-weight-bold px-3 py-1 mr-2" itemprop="url">
                Account
            </a>
            @endauth

            @if(isset($show_logo) && $show_logo)
            <a href="/apartments" class="align-self-center font-weight-bold text-white px-3 py-1" itemprop="url">
                Book Now
            </a>
            @endif

            <button class="navbar-toggler d-block text-white" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon text-white white-background"></span>
                <span class="navbar-toggler-icon text-white white-background"></span>
                <span class="navbar-toggler-icon text-white white-background"></span>
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