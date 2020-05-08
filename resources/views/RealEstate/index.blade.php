@extends('home')


@section('content')

    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5">
                    @if($category == 'MyAkars')
                    <h2 style="color: #f89d13" class="font-weight-bold text-center" >عقاراتى المعروضة</h2>
                        @else
                        <h2 style="color: #f89d13" class="font-weight-bold text-center" >العقارات المتاحة</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            @foreach($RealEstates as $RealEstate)
                @include('_single_RealEstate')
            @endforeach
            </div>
        </div>
    </div>

@endsection
