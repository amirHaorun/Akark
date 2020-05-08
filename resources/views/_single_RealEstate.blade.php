<div style="margin-top:-30px" class="col-md-6 col-lg-4 my-3 pl-8 m-lg-50">
    @if($RealEstate->user_id == auth()->id())
    <h5 class="text-center text-primary font-weight-bold shadow">
        <a href="{{route('Akar.edit',$RealEstate->id)}}">تعديل</a>
    </h5>
    @endif
    <a style="background-color: #fff" href="{{route('Akar.show',$RealEstate->id)}}" class="prop-entry d-block shadow-lg">
        <figure>
            <img src="{{$RealEstate->getMainPicture()}}" alt="Image"  style="width: 100%; height: 320px;">
        </figure>
        <hr style=" height: 5px;
        background-color: #f89d13;
        border: none;
        margin-top:-1px">
        <div style="position: relative;" class="pb-9">
            <div class="row">
                <div class="col-md-12 text-right">
                    <h3 class="text-black  m-2">{{$RealEstate->title}}
                    </h3>
                </div>

                <div class="col-md-12 text-right">
                    <button style="padding-bottom:0px" class="btn btn-primary btn-sm mt-2 mr-4 mb-4" type="button">
                        <p style="margin-bottom: 0px" class="m-1 mx-2 font-weight-bold"> {{$RealEstate->price}} ج.م </p>
                    </button>
                    <button style="padding-bottom:0px" class="btn btn-primary btn-sm mt-2 mr-4 mb-4" type="button">
                        <p  style="margin-bottom: 0px" class="m-1 mx-2 font-weight-bold">
                            <i class="fas fa-location-arrow mr-2"></i>
                            {{$RealEstate->getLocation()}}
                        </p>
                    </button>
                </div>

                <div class="col-md-12 text-center ">
                    <p style="margin-bottom: 0px" class="m-2 font-weight-bold"> {{$RealEstate->akar_type}} <<</p>
                </div>
            </div>

        </div>
    </a>
</div>
