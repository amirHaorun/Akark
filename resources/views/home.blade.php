<!DOCTYPE html>
<html lang="en">
<head>
    <title>عقارك</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"type="text/css">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}"type="text/css">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}"type="text/css">

        </head>
<body>

<div class="site-loader"></div>

<div class="site-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-md-6">
                <p class="mb-0">
                    <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+20 128 2399 797</span></a>
                    <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">amir.haroun@icloud.com</span></a>
                </p>
            </div>
            <div class="col-6 col-md-6 text-right">
                <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
                <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
                <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
            </div>
        </div>
    </div>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class=""><a href="{{route('main')}}" class="h5 text-uppercase text-black"><strong>عقارك<span class="text-danger">...</span></strong></a></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul style="font-size:18px" class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="{{route('main')}}">بحث</a>
                            </li>
                            <li class="has-children">
                                <a href="">عقارات</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('Akars','شقق و دوبلكس للبيع')}}">شقق و دوبلكس للبيع</a></li>
                                    <li><a href="{{route('Akars','شقق و دوبلكس للإيجار')}}">شقق و دوبلكس للإيجار</a></li>
                                    <li><a href="{{route('Akars','فلل للبيع')}}">فلل للبيع</a></li>
                                    <li><a href="{{route('Akars','فلل للإيجار')}}">فلل للإيجار</a></li>
                                    <li><a href="{{route('Akars','عقارات مصايف للبيع')}}">عقارات مصايف للبيع</a></li>
                                    <li><a href="{{route('Akars','عقارات مصايف للإيجار')}}">عقارات مصايف للإيجار</a></li>
                                    <li><a href="{{route('Akars','عقار تجارى للبيع')}}">عقار تجارى للبيع</a></li>
                                    <li><a href="{{route('Akars','عقار تجارى للإيجار')}}">عقار تجارى للإيجار</a></li>
                                    <li><a href="{{route('Akars','مبانى و أراضى')}}">مبانى و أراضى</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('Akar.create')}}">أضف عقار</a></li>
                            @auth
                                <li><a href="{{route('Akars',$status = 'MyAkars')}}">عقاراتى</a></li>
                                <li><a href="{{route('MyProfile')}}">حسابى</a></li>
                                    <a style="color:black" class="text-blue-500 text-lg pr-16 pt-5" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    @else
                                <li><a style="color:black" href="{{route('login')}}">تسجيل دخول</a></li>
                            @endauth


                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>
@include('_Search_Panel')
@section('content')
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="float-right">
                    <h2 class="text-black">الإعلانات المضافة حديثاً</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @if($RealEstates ?? '' ?? '')
                    @forelse($RealEstates ?? '' ?? ''  as $RealEstate)

                        @include('_single_RealEstate')

                        @empty
                        <div class="col-md-12">
                            <h5 class="text-black text-center">لا توجد إعلانات</h5>
                        </div>
                    @endforelse
                        <div class="col-md-12 text-center">
                            <h3 class="text-center">{{$RealEstates->links()}}</h3>
                        </div>
            @endif
        </div>




    </div>
</div>
<div class="site-section site-section-sm bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-white">Wide Range of Choices Just For You</h2>
                <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
            </div>
        </div>
    </div>
</div>
@show
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About Akark</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                </div>



            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">Buy</a></li>
                            <li><a href="">Rent</a></li>
                            <li><a href="">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="">About Us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Terms</a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>



            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/js/jquery.stellar.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/places.js/1/places.min.js"></script>
<script>
    var placesAutocomplete = places({
        container: document.querySelector('#address-input')
    }).configure({
        type: ['Address','city'],
        countries: ['eg']
    });

</script>
<script>
    var placesAutocomplete = places({
        container: document.querySelector('#address-search')
    }).configure({
        type: ['Address','city'],
        countries: ['eg']
    });

</script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#message').modal('show');
    });
</script>
</body>
</html>
