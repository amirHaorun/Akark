@extends('home')

@section('content')

    <div class="site-section site-section-sm">

        <div style="margin-bottom:100px" class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img class="img-responsive" height="450px" width="100%" src="{{$RealEstate->getMainPicture()}}">
                </div>
                <div class="col-lg-4 pl-md-5">

                    <div class="bg-white widget border rounded">

                        <h3 style="font-size: 20px ;color: #f89d13" class="font-weight-bold  mb-3 text-center">تواصل مع المعلن</h3>
                        <form action="" class="form-contact-agent">
                            <div class="collapse" id="info">
                            <div class="form-group">
                                <label for="name">أسم المعلن</label>
                                <h5 class="font-weight-bold text-black">{{$RealEstate->user->Name}}</h5>
                            </div>
                            <div class="form-group">
                                <label for="Email">الأيميل</label>
                                <h5 class="font-weight-bold text-black">{{$RealEstate->user->email}}</h5>
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <h5 class="font-weight-bold text-black">{{$RealEstate->user->phone}}</h5>
                            </div>
                            </div>
                            <div class="form-group mt-2 text-center">
                                <a id="infoButton" class="btn btn-primary" data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    اظهار بيانات المعلن
                                </a>
                            </div>
                        </form>
                    </div>
                    @if($RealEstate->user_id == auth()->id())
                    <div class="row mt-2">
                        <div class="col-md-6 col-sm-6 mt-1 text-center ">
                                <a  data-toggle="modal" data-target="#delete-warning" href="{{route('Akar.destroy',$RealEstate->id)}}" style="background-color: red" class="btn text-white rounder">
                                    حذف الأعلان</a>
                        </div>
                        <div class="col-md-6 col-sm-6 mt-1 text-center">
                            <a href="{{route('Akar.edit',$RealEstate->id)}}" class="btn btn-primary text-white">تعديل الأعلان</a>
                        </div>
                    </div>
                        @endif
                </div>

                <div class="bg-white">
                    <div class="row my-3">
                        <div class="col-md-12 text-center">
                            <strong style="color: #f89d13" class="h1 mb-3">{{$RealEstate->title}}</strong>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 ">المساحة</span>
                            <strong class="d-block text-black letter-spacing-1">{{$RealEstate->size}}.m<sub style="  vertical-align: super;font-size: smaller;">2</sub></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 ">المكان</span>
                            <strong class="d-block text-black">{{$RealEstate->location}}</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 ">السعر</span>
                            <strong class="d-block text-black"> {{$RealEstate->price}} ج.م </strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black">التفاصيل</h2>
                    <p>
                       {{$RealEstate->description}}
                    </p>

                </div>
        </div>
    </div>
        <div name="flash-Messages">
            @if(session()->has('Added-Successfully'))
                <div class="modal fade shadow rounded " id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-bottom:none">

                            <div style="background-color: #f89d13;color: white" class="modal-body pt-5 text-center">
                                <p style="font-size: 35px"> قد تم أضافة الأعلان بنجاح </p>
                            </div>
                            <div style="background-color: #f89d13" class="modal-footer">
                                <button style="background-color: white;color:black" type="button" class="btn" data-dismiss="modal">غلق</button>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(session()->has('Edited-Successfully'))
                <div class="modal fade shadow rounded " id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-bottom:none">

                            <div style="background-color: #f89d13;color: white" class="modal-body pt-5 text-center">
                                <p style="font-size: 35px"> قد تم تعديل الأعلان بنجاح </p>
                            </div>
                            <div style="background-color: #f89d13" class="modal-footer">
                                <button style="background-color: white;color:black" type="button" class="btn" data-dismiss="modal">غلق</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <div class="modal fade shadow rounded " id="delete-warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-bottom:none">

                            <div style="background-color: #f89d13;color: white" class="modal-body pt-5 text-center">
                                <p style="font-size: 35px">تأكيد حذف الأعلان</p>
                            </div>
                            <div style="background-color: #f89d13" class="modal-footer">
                                <button style="background-color: white;color:black" type="button" class="btn" data-dismiss="modal">
                                    <a class="px-3" style="font-size:20px" href="/">غلق</a>
                                </button>

                                <button style="background-color: white;color:black" type="button" class="btn">
                                    <a class="px-3" style="font-size:20px" href="{{route('Akar.destroy',$RealEstate->id)}}">تأكيد</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
@endsection
