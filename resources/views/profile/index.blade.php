@extends('home')

@section('content')

    <div class="site-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5 offset-3">
                    <h2 style="color: #f89d13" class="font-weight-bold text-right" >تعديل البيانات الشخصية</h2>
                </div>
            </div>
        </div>

        <div class="container">
            {!! Form::open(['method' => 'PATCH' , 'route'=>['MyProfile.update'],'files'=>true]) !!}
            @csrf
            <div class="row">

                <div class="col-12 mb-3">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">الأسم</label>
                    <input type="text" name="name" class="form-control" value="{{auth()->user()->Name}}" required>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
                <div class="col-12 mb-3">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">رقم الهاتف</label>
                    <input type="text" name="phone" class="form-control" value="{{auth()->user()->phone}}" required>
                </div>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
                <div class="col-md-12 mb-3">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">الايميل</label>
                    <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" required>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right" for="password">الرقم السري للحساب</label>
                    <input type="password" name="password" class="form-control" required>

                    @error('password')
                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-12 mb-1">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right" for="password_confirmation">
                        تأكيد الرقم السري للحساب </label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                    @error('password_confirmation')
                    <span class="invalid-feedback bg-black" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

            </div>
            <button  type="submit" class="form-control btn btn-primary mt-2">حفظ</button>

            {!! Form::close() !!}
        </div>
    </div>

@endsection
