<div style="margin-bottom: -50px" class="pt-1">
    <div class="container">
        {!! Form::open(['method' => 'POST' , 'route'=>'Akar.search']) !!}
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <h3 class="font-weight-bold text-center text-black">السعر</h3>

                <div class="select-wrap">
                    <label class="float-right font-weight-bold">من</label>
                    <input
                        @if(session()->has('StartValue'))
                            value="{{session()->get('StartValue')}}"
                        @endif
                        class="form-control" type="text" name="StartValue">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <h3 class="font-weight-bold text-center text-black">المساحة</h3>
                <div class="select-wrap">
                    <label class="float-right font-weight-bold">من</label>
                    <input
                        @if(session()->has('StartSize'))
                        value="{{session()->get('StartSize')}}"
                        @endif
                        class="form-control" type="text" name="StartSize" >
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap" style="padding-top:40px">
                    <label class="float-right font-weight-bold">المنطقة</label>
                    <input
                        @if(session()->has('location'))
                        value="{{session()->get('location')}}"
                        @endif
                        name="location" type="search" id="address-search" placeholder="المنطقة" />
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap" style="padding-top:35px">
                    <label class="float-right font-weight-bold">نوع العقار</label>
                    <span class="icon icon-arrow_drop_down"  style="padding-top:65px"></span>
                    <select name="akar_type" class="form-control d-block rounded-0">
                        @if(session()->has('akar_type'))
                            <option value="{{session()->get('akar_type')}}" >{{session()->get('akar_type')}}</option>
                        @else
                            <option value=""  defaultValue>-- اختر نوع العقار --</option>
                        @endif
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
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <label class="float-right font-weight-bold">إلى</label>
                    <input
                        @if(session()->has('EndValue'))
                        value="{{session()->get('EndValue')}}"
                        @endif
                        class="form-control" type="text" name="EndValue">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <label class="float-right font-weight-bold">إلى</label>
                    <input
                        @if(session()->has('EndSize'))
                        value="{{session()->get('EndSize')}}"
                        @endif
                        class="form-control" type="text" name="EndSize" >
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 text-center" style="margin-top:33px">
                <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
            </div>

        </div>
        {!! Form::close() !!}

    </div>
</div>
