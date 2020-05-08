@extends('home')

@section('content')

    <div class="site-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5 offset-3">
                    <h2 style="color: #f89d13" class="font-weight-bold text-right" >تعديل عقار</h2>
                </div>
            </div>
        </div>
        <div class="container">
            {!! Form::open(['method' => 'PATCH' , 'route'=>['Akar.update',$RealEstate->id],'files'=>true]) !!}
            @csrf

            <div class="row">

                <div class="col-md-4 col-lg-4 mb-2 ">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">المساحة بالمتر المربع</label>
                    <input Value="{{$RealEstate->size}}" type="number" name="size" class="form-control" placeholder="120 " required>
                </div>
                <div class="col-md-4 col-lg-4 mb-2">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">العقار</label>
                    <select class="form-control selectpicker" name="akar_type" required >
                        <option Value="{{$RealEstate->akar_type}}" selected value>{{$RealEstate->akar_type}}</option>
                        <option value="شقق و دوبلكس للبيع">شقق و دوبلكس للبيع</option>
                        <option value="شقق و دوبلكس للإيجار">شقق و دوبلكس للإيجار</option>
                        <option value="فلل للبيع">فلل للبيع</option>
                        <option value="فلل للإيجار">فلل للإيجار</option>
                        <option value="عقارات مصايف للبيع">عقارات مصايف للبيع</option>
                        <option value="عقارات مصايف للإيجار">عقارات مصايف للإيجار</option>
                        <option value="عقار تجارى للبيع">عقار تجارى للبيع</option>
                        <option value="عقار تجارى للإيجار">عقار تجارى للإيجار</option>
                        <option value="مبانى و أراضى">مبانى و أراضى</option>
                    </select>
                </div>
                <div class="col-md-4 col-lg-4 mb-2 ">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">العنوان الرئيسى</label>
                    <input Value="{{$RealEstate->title}}" name="title" class="form-control" placeholder="شقة فى منطقة الزمالك على النيل مباشرة" required>
                </div>


            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-4 mt-2">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">وصف العقار</label>
                    <textarea name="description" class="form-control rounded-5"  rows="5" required>{{$RealEstate->description}}</textarea>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4 offset-md-8 offset-lg-8 col-lg-4 mt-2">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">المنطقة</label>
                    <input value="{{$RealEstate->location}}" name="location" type="search" id="address-input" placeholder="المنطقة" />


                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 offset-8 mt-2">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">السعر</label>
                    <input value="{{$RealEstate->price}}" name="price" type="number" class="form-control" required>
                </div>
                <br>
                <div class="col-md-4 offset-md-8 offset-lg-8 text-right mt-3">
                    <label style="color: black; font-size: 18px" class="font-weight-bold float-right">تعديل الصورة</label>
                    <input name="main_photo" type="file">
                    <img height="100" width="150" src="{{$RealEstate->getMainPicture()}}">

                </div>
            </div>


            <button  type="submit" class="form-control btn btn-primary mt-5">تعديل</button>

            {!! Form::close() !!}

        </div>

    </div>


@endsection
